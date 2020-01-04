<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    $my_name = "Aditiya Rahman";
        $book = [
            "algoritma" => 12,
            "data mining" => 30,
            "AI" => 33,
            "image processing" => 55,
            "RPL" => 100
        ];

    return view('about', ['nama' => $my_name, 'buku' => $book]);
});

Route::get('/buku', function () {
    return view('read');
});

Route::get('/add', function () {
    return view('insert');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/update', function () {
    return view('update');
});
