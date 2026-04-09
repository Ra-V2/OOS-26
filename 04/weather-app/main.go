package main

import (
	"weather-app/controllers"

	"github.com/labstack/echo/v4"
)

func main() {

	e := echo.New()

	e.GET("/weather", controllers.GetWeather)

	e.Start(":8080")
}
