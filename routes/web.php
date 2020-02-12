<?php
Auth::routes();  

Route::get('/', function () { return view('index');})->name('LoginOut');
Route::get('/register','RegisterController@index')->name('register.index');

include("member.php");
include("admin.php");
include("officer.php");
include("cache.php");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/staffPdf/{id?}', 'member\PdfController@staffPdf')->name('staffPdf');

