<?php
/**
 * Контракты.
 * @package App.Contracts
 * @since 1.0
 * @version 1.0
 */
namespace App\Contracts;

/**
 * Абстрактный класс для проектирования собственной системы получения погоды.
 * @version 1.0
 * @since 1.0
 */
abstract class Weather
{
	/**
	 * Получение прогноза погоды по широте и долготе.
	 * @param double $lat Широта.
	 * @param double $lon Долгота.
	 * @return array|bool Массив данных запрашиваемой погоды.
	 * @since 1.0
	 * @version 1.0
	 */
	abstract public function get($lat, $lon);
}