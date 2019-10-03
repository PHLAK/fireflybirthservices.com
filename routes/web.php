<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'root', function () {
    return view('index');
}]);

Route::get('doula-services', ['as' => 'doula', function() {
    return view('doula');
}]);

Route::get('breastfeeding-services', ['as' => 'breastfeeding', function() {
    return view('breastfeeding');
}]);

Route::get('placenta-services', ['as' => 'placenta', function() {
    return view('placenta');
}]);

Route::get('contact', ['as' => 'contact', function() {
    return view('contact');
}]);

Route::get('about', ['as' => 'about', function() {
    return view('about');
}]);
