<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/onetoone', [HomeController::class, 'one_to_one_rel']);

Route::Get('/add-song', [SongController::class, 'add_song']);
Route::Get('/add-singer', [SingerController::class, 'add_singer']);
Route::Get('/show-song/{id}', [SongController::class, 'show_song']);
Route::Get('/show-singer/{id}', [SingerController::class, 'show_singer']);
Route::Get('/deatach-singer-song/{id}', [SingerController::class, 'delete_data_singer_song']);

