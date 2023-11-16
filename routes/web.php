<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title = 'Hello Laravel';
    return view('home', compact('title'));
});

Route::get('/family', function () {
    $title = 'Family';
    $components = [
        [
            'name' => 'Massimo',
            'lastname' => 'Azzini',
            'age' => '39',
        ],
        [
            'name' => 'Valeria',
            'lastname' => 'Razzetti',
            'age' => '38',
        ],
        [
            'name' => 'Daniele',
            'lastname' => 'Azzini',
            'age' => '6',
        ],
    ];
    return view('family', compact('title', 'components'));
});
