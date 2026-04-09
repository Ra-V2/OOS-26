package database

import (
	"weather-app/models"

	"github.com/glebarez/sqlite"
	"gorm.io/gorm"
)

var DB *gorm.DB

func InitDB() {

	db, err := gorm.Open(sqlite.Open("weather.db"), &gorm.Config{})
	if err != nil {
		panic(err)
	}

	db.AutoMigrate(&models.Weather{})

	DB = db
}

func SeedData() {

	var count int64
	DB.Model(&models.Weather{}).Count(&count)

	if count > 0 {
		return
	}

	data := []models.Weather{
		{City: "Warsaw", Temperature: 20},
		{City: "Krakow", Temperature: 18},
	}

	for _, w := range data {
		DB.Create(&w)
	}
}
