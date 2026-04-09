package controllers

import (
	"net/http"
	"weather-app/database"
	"weather-app/models"
	"weather-app/services"

	"github.com/labstack/echo/v4"
)

type Location struct {
	City string `json:"city"`
	Lat  string `json:"lat"`
	Lon  string `json:"lon"`
}

type WeatherRequest struct {
	Locations []Location `json:"locations"`
}

func GetWeather(c echo.Context) error {

	req := new(WeatherRequest)

	if err := c.Bind(req); err != nil {
		return err
	}

	var results []models.Weather

	for _, loc := range req.Locations {

		apiData, _ := services.GetWeatherFromAPI(loc.Lat, loc.Lon)

		weather := models.Weather{
			City:        loc.City,
			Temperature: apiData.CurrentWeather.Temperature,
			Description: "External API",
		}

		database.DB.Create(&weather)

		results = append(results, weather)
	}

	return c.JSON(http.StatusOK, results)
}
