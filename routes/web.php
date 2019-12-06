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


Route::get('/problem7', function()
{
    return view('problem7');
});
Route::get('/problem7a', function()
{
    return view('problem7a');
});
Route::get('/problem7b', function()
{
    return view('problem7b');
});
Route::get('/problem7c', function()
{
    return view('problem7c');
});
Route::get('/problem7d', function()
{
    return view('problem7d');
});