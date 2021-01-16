<?php

use Illuminate\Http\Request;

Route::post('/save/', 'ApiController@save')->name('save_values');
Route::post('/read/', 'ApiController@read')->name('read_values');
Route::post('/details/', 'ApiController@details')->name('fetch_details');

Route::get('/temperature/', 'ApiController@getTemperature');
Route::get('/humidity/', 'ApiController@getHumidity');
Route::get('/pressure/', 'ApiController@getPressure');
Route::get('/batteryLevel/', 'ApiController@getBatteryStatusLevel');



