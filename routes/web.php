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

Route::get('/lightning_installation', function () {
    return view('services.lightning_detail');
});

Route::get('/wiring', function () {
    return view('services.wiring_detail');
});

Route::get('/home_automate', function () {
    return view('services.home_automate_detail');
});

Route::get('/electric_circuit', function () {
    return view('services.circuit_detail');
});


Route::get('/emergency_repair', function () {
    return view('services.emergency_detail');
});

Route::get('/   _electric_solution', function () {
    return view('services.lightning_detail');
});

Route::get('/lightning_installation', function () {
    return view('services.lightning_detail');
});

Route::get('/lightning_installation', function () {
    return view('services.lightning_detail');
});

Route::get('/lightning_installation', function () {
    return view('services.lightning_detail');
});



Route::get('/contact', function () {
    return view('contact');
});
