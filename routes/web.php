<?php

// Page
Route::get('/', 'PagesController@index');
Route::post('/send', 'VisitorsController@send' );