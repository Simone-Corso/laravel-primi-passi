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
    $data = [
        'title' => 'Benvenuto su Laravel Primi Passi Con Il Mitico Simone',
        'content' => 'Questa è la tua prima pagina con Laravel!, Adesso Si Mangia La Pizza'
    ];

    return view('home', $data);
});

Route::get('/new', function () {
    return view('new');
});
