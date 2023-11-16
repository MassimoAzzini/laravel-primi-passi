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
            'link' => '/massimo_azzini',
        ],
        [
            'name' => 'Valeria',
            'lastname' => 'Razzetti',
            'age' => '38',
            'link' => '/valeria_razzetti',
        ],
        [
            'name' => 'Daniele',
            'lastname' => 'Azzini',
            'age' => '6',
            'link' => '/daniele_azzini',
        ],
    ];
    return view('family', compact('title', 'components'));
});

Route::get('/massimo_azzini', function () {
    $informations = [
        [
            'name' => 'Massimo',
            'lastname' => 'Azzini',
            'age' => '39',
            'storia' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'interessi' => ['basket', 'pc', 'mangiare'],
            'link' => '/massimo_azzini',
        ],
    ];

    return view('massimo_azzini', compact('informations'));
});

Route::get('/valeria_razzetti', function () {
    $informations = [
        [
            'name' => 'Valeria',
            'lastname' => 'Razzetti',
            'age' => '38',
            'storia' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'interessi' => ['cucina', 'macchine'],
            'link' => '/valeria_razzetti',
        ],
    ];

    return view('valeria_razzetti', compact('informations'));
});

Route::get('/daniele_azzini', function () {
    $informations = [
        [
            'name' => 'Daniele',
            'lastname' => 'Azzini',
            'age' => '6',
            'storia' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'interessi' => ['basket', 'tennis', 'scuola', 'nintendo-swich'],
            'link' => '/massimo_azzini',
        ],
    ];

    return view('daniele_azzini', compact('informations'));
});
