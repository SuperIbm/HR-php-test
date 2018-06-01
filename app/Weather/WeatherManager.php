<?php
/**
 * Погода.
 * @package App.Weather
 * @since 1.0
 * @version 1.0
 */
namespace App\Weather;

use Illuminate\Support\Manager;


/**
 * Класс системы погоды.
 * @version 1.0
 * @since 1.0
 */
class WeatherManager extends Manager
{
	/**
	 * @see \Illuminate\Support\Manager::getDefaultDriver
	 */
	public function getDefaultDriver()
	{
	return $this->app['config']['weather.driver'];
	}
}
?>