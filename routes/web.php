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
Route::get('/error', function () { return view('error404');})->name('error404');
Route::get('/error405', function () { return view('error405');})->name('error405');
