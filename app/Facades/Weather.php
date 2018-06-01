<?php
/**
 * Фасады ядра.
 * @package App.Facades
 * @since 1.0
 * @version 1.0
 */
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Фасад класса получения погоды.
 * @version 1.0
 * @since 1.0
 */
class Weather extends Facade
{
	/**
	 * Получить зарегистрированное имя компонента.
	 * @return string
	 * @version 1.0
	 * @since 1.0
	 */
	protected static function getFacadeAccessor()
	{
	return 'weather';
	}
}
?>