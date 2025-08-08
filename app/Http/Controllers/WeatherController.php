<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
//    public function showWeather($city): Factory|Application|View|string|\Illuminate\Contracts\Foundation\Application
//    {
//        $apiResponse = Http::get('https://geocoding-api.open-meteo.com/v1/search', [
//            'name' => $city,
//            'country' => '1',
//        ]);
//
//        $geoData = $apiResponse->json();
//
//        if (empty($geoData)) {
//            return 'No city Found';
//        }
//        $latitude = $geoData['results'][0]['latitude'];
//        $longitude = $geoData['results'][0]['longitude'];
//
//        // Step 2: Get weather data
//        $weatherResponse = Http::get('https://api.open-meteo.com/v1/forecast', [
//            'latitude' => $latitude,
//            'longitude' => $longitude,
//            'current_weather' => true,
//        ]);
//
//        $weatherData = $weatherResponse->json();
//
//        // Step 3: Pass it to Blade view
//        return view('weather.show', [
//            'city' => $city,
//            'temperature' => $weatherData['current_weather']['temperature'],
//            'windspeed' => $weatherData['current_weather']['windspeed'],
//        ]);
//    }

    public function getWeatherApi($city)
    {
        $geoResponse = Http::get('https://geocoding-api.open-meteo.com/v1/search', [
            'name' => $city,
            'count' => 1,
        ]);

        $geoData = $geoResponse->json();
        if (empty($geoData['results'])) {
            return response()->json(['error' => 'City not found'], 404);
        }

        $latitude = $geoData['results'][0]['latitude'];
        $longitude = $geoData['results'][0]['longitude'];

        $weatherResponse = Http::get('https://api.open-meteo.com/v1/forecast', [
            'latitude' => $latitude,
            'longitude' => $longitude,
            'current_weather' => true,
        ]);

        $weatherData = $weatherResponse->json();

        return view('weather.show', [
            'city' => $city,
            'temperature' => $weatherData['current_weather']['temperature'],
            'windspeed' => $weatherData['current_weather']['windspeed'],
        ]);
    }

}
