<?php

use Illuminate\Support\Facades\Route;

// Define a route for the home page
Route::get('/', function () {
    return view('welcome');
});

// Define additional web routes here
// Example: Route::get('/about', 'AboutController@index');