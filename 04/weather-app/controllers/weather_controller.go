package controllers

import (
	"net/http"

	"github.com/labstack/echo/v4"
)

func GetWeather(c echo.Context) error {

	city := c.QueryParam("city")

	response := map[string]string{
		"city": city,
		"info": "working",
	}

	return c.JSON(http.StatusOK, response)
}
