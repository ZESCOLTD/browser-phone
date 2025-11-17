<?php

use App\Livewire\Chat\Drawer;
use App\Livewire\Chat\Group;
use App\Livewire\Chat\PrivateConv;
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

Route::get('/livewire/chat/drawer', Drawer::class)->name('livewire.chat.drawer');

Route::get('/livewire/chat/private', PrivateConv::class)->name('livewire.chat.private');


Route::get('/livewire/chat/group', Group::class)->name('livewire.chat.group');


