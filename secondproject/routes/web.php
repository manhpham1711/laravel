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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/book','TodoController@index');

Route::delete('/book/add', "TodoController@showAdd");

Route::delete('/book/add/new','TodoController@add');

Route::delete('/book/delete/{id}', "TodoController@delete");


// Route::get('/book/add', function () {
//     return view('add');
// });
