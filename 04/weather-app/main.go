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

	e.GET("/weather", controllers.GetWeather)

	e.Start(":8080")
}
