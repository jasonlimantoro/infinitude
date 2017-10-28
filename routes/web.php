<?php

// Page
Route::get('/', 'PagesController@index');
Route::post('/send', 'PagesController@send' );