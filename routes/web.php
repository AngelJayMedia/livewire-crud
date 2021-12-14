<?php

use App\Http\Livewire\Tag;
use App\Http\Livewire\Home;
use App\Http\Livewire\Tags;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Posts\Create;

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

Route::get('/', Home::class)->name('home');

/* Name: tags
 * Url: /tags/*
 * Route: tags.*
*/
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('tags', Tags::class)->name('tags');
});

/* Name: posts
 * Url: /posts/*
 * Route: posts.*
*/
Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
    Route::get('create', Create::class)->name('create');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
