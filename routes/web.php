<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services.service');
});

Route::get('/service', function () {
    return view('services.service_detail');
});

Route::get('/contact', function () {
    return view('contact');
});
