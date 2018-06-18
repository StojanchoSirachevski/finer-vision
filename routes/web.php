<?php

Route::get('/', 'DashboardController@index');
Route::post('/store', 'DashboardController@store');