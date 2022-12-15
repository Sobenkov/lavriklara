<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;

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

Route::get('/posts', [Posts::class, 'index']);
Route::get('/posts/create', [Posts::class, 'create']);
Route::post('/posts', [Posts::class, 'store']);
