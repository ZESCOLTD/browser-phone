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
    return view('welcome');
});

Route::get('/chat/drawer', function () {
    return view('chat.drawer');
});

Route::get('/chat/private', function () {
    return view('chat.private');
});

Route::get('/chat/group', function () {
    return view('chat.group');
});

