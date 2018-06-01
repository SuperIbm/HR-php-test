<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


/**
 * Контроллер для работы с погодой.
 * @version 1.0
 * @since 1.0
 */
class ControllerWeather extends Controller
{
    /**
     * Отображение погоды.
     * @return Response
     */
    public function index()
    {

        return view('weather.index');
    }
}
