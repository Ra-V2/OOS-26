package controllers

import (
	"net/http"
	"weather-app/database"
	"weather-app/models"
	"weather-app/services"

	"github.com/labstack/echo/v4"
)

func GetWeather(c echo.Context) error {

	city := c.QueryParam("city")
	lat := c.QueryParam("lat")
	lon := c.QueryParam("lon")

	apiData, err := services.GetWeatherFromAPI(lat, lon)

	if err != nil {
		return c.JSON(http.StatusInternalServerError, err)
	}

	weather := models.Weather{
		City:        city,
		Temperature: apiData.CurrentWeather.Temperature,
		Description: "External API",
	}

	database.DB.Create(&weather)

	return c.JSON(http.StatusOK, weather)
}
