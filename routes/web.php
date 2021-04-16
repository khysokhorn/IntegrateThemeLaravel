<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/team', [App\Http\Controllers\PageController::class, 'team'])->name('team');
Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('services');
Route::get('/portfolio', [App\Http\Controllers\PageController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [App\Http\Controllers\PageController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/pricing', [App\Http\Controllers\PageController::class, 'pricing'])->name('pricing');
Route::get('/portfolioDetails', [App\Http\Controllers\PageController::class, 'portfolioDetails'])->name('portfolioDetails');

