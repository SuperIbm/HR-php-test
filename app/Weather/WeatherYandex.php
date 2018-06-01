<?php
/**
 * Погода.
 * @package App.Weather
 * @since 1.0
 * @version 1.0
 */
namespace App\Weather;

use App\Contracts\Weather;


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
     * @return array Массив данных запрашиваемой погоды.
     * @since 1.0
     * @version 1.0
     */
    public function get($lat, $lon)
	{
    /*
	$pathToFile = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=".$Carbon->format("d.m.Y");
    $Htmldom = new Htmldom($pathToFile, true, true);

		if($Htmldom->Valute)
		{
		$data = Array();

			foreach($Htmldom->Valute as $item)
			{
				$data[$item->CharCode->asText()] = array
				(
				"numCode" => $item->NumCode->asText(),
				"nominal" => $item->Nominal->asText(),
				"name" => $item->Name->asText(),
				'value' => (float) str_replace(",", ".", $item->Value->asText())
				);
			}

		if(isset($data[$charCode])) return $data[$charCode];
		else return $data;
		}
    */

	return null;
	}
}
?>