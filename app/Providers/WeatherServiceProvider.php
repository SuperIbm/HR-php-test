<?php
/**
 * Основные провайдеры.
 * @package App.Providers
 * @version 1.0
 * @since 1.0
 */
namespace app\Providers;

use App;
use Weather;
use Illuminate\Support\ServiceProvider;
use App\Weather\WeatherManager;
use App\Weather\WeatherYandex;


/**
 * Класс сервис-провайдера для погоды.
 * @version 1.0
 * @since 1.0
 */
class WeatherServiceProvider extends ServiceProvider
{
    /**
     * Обработчик события загрузки приложения.
     * @return void
     * @version 1.0
     * @since 1.0
     */
	public function boot()
	{
		App::singleton('weather',
			function($app)
			{
			return new WeatherManager($app);
			}
		);

        Weather::extend('yandex',
			function($app)
			{
				return new WeatherYandex();
			}
		);
	}

    /**
     * Регистрация сервис провайдеров.
     * @return void
     * @version 1.0
     * @since 1.0
     */
	public function register()
	{
		//
	}
}