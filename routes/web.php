<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlacanjeController;
use Illuminate\Http\Request;

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

Route::view('/welcome', 'welcome');

Route::get('/placanje', [PlacanjeController::class, 'show']);
//Route::get('/placanje', 'App\Http\Controllers\PlacanjeController@show');

Route::get('/users', function (Request $request) {
    return request()->ime;
});

Route::redirect('/users', '/');

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::any('/greeting', function () {
    return 'Dobar dan svijete!';
});
