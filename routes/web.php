<?php

// Page
Route::get('/', 'PagesController@index');
Route::post('/send', 'VisitorsController@send');

Route::get('/img', function(){
    $mailto = 'example@com';
    // $img = Image::make(url('/images/Home_BG.png'));
    
    $img = \Image::cache(function($image) {
        $image->make(url('/images/Home_BG.png'));
    }, 10, true);
    // create response and add encoded image data
    $response = $img->encode('data-url');

    // output
    // return $response;
    return view('image', compact(['response', 'mailto']));
});