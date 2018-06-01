<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Weather;


/**
 * Контроллер для работы с погодой.
 * @version 1.0
 * @since 1.0
 */
class WeatherController extends Controller
{
    /**
     * Отображение погоды.
     * @return Response Ответ.
     */
    public function index()
    {
        $weather = Weather::get(53.243325, 34.363731);

        return view('weather.index',
            [
            'weather' => $weather
            ]
        );
    }
}
