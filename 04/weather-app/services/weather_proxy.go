package services

import (
	"encoding/json"
	"fmt"

	"github.com/go-resty/resty/v2"
)

type WeatherAPIResponse struct {
	CurrentWeather struct {
		Temperature float64 `json:"temperature"`
	} `json:"current_weather"`
}

func GetWeatherFromAPI(lat string, lon string) (*WeatherAPIResponse, error) {
	client := resty.New()

	resp, err := client.R().
		SetQueryParams(map[string]string{
			"latitude":        lat,
			"longitude":       lon,
			"current_weather": "true",
		}).
		Get("https://api.open-meteo.com/v1/forecast")

	if err != nil {
		return nil, err
	}

	if resp.IsError() {
		return nil, fmt.Errorf("weather API error: status %d", resp.StatusCode())
	}

	var result WeatherAPIResponse
	if err := json.Unmarshal(resp.Body(), &result); err != nil {
		return nil, err
	}

	return &result, nil
}
