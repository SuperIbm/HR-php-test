<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',
    [
        'uses' => 'WeatherController@index',
        'as' => 'weather.index'
    ]
);

Route::get('/order/',
    [
        'uses' => 'OrderController@index',
        'as' => 'order.index'
    ]
);

Route::get('/order/edit/{id}',
    [
        'uses' => 'OrderController@edit',
        'as' => 'order.edit'
    ]
);

Route::post('/order/update/{id}',
    [
        'uses' => 'OrderController@update',
        'as' => 'order.update'
    ]
);