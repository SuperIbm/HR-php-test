<?php
/**
 * Погода.
 * @package App.Weather
 * @since 1.0
 * @version 1.0
 */
namespace App\Weather;

use App\Contracts\Weather;
use Config;

/**
 * Класс драйвер для удаленного получения погоды.
 * @version 1.0
 * @since 1.0
 */
class WeatherYandex extends Weather
{
    /**
     * Получение прогноза погоды по широте и долготе.
     * @param double $lat Широта.
     * @param double $lon Долгота.
     * @return array|bool Массив данных запрашиваемой погоды.
     * @since 1.0
     * @version 1.0
     */
    public function get($lat, $lon)
	{
        $headers =
            [
                "X-Yandex-API-Key: ".Config::get("weather.access.yandex.key"),
                "Content-Type: application/json"
            ];

        $ch = curl_init("https://api.weather.yandex.ru/v1/forecast?lat=".$lat."&lon=".$lon);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);
        curl_close($ch);

        if($response !== false)
        {
            $data = json_decode($response, true);

            return
            [
                "temp" => $data["fact"]["temp"],
                "feels_like" => $data["fact"]["feels_like"],
                "icon" => "https://yastatic.net/weather/i/icons/blueye/color/svg/".$data["fact"]["icon"].".svg",
            ];
        }
        else return false;
	}
}
?>