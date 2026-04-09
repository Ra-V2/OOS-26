package main

import (
	"weather-app/controllers"
	"weather-app/database"

	"github.com/labstack/echo/v4"
)

func main() {

	database.InitDB()
	database.SeedData()

	e := echo.New()

	e.GET("/weather", controllers.GetWeather)  // single city weather endpoint (query parameters)
	e.POST("/weather", controllers.GetWeather) // multiple cities weather endpoint (JSON body)

	e.Start(":8080")
}
