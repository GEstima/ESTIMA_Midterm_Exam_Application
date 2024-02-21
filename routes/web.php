<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControler;
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

Route::get('/Movies', function () {
    return view('Movies');
});

route::get('/Movies', [ProductControler::class, 'show']);
