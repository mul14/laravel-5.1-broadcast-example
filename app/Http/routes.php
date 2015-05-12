<?php

Route::get('/', 'RegistrationController@create');
Route::post('/', 'RegistrationController@store');

Route::get('/admin', 'AdminController@dashboard');
