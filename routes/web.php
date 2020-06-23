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
// LANDING
Route::get('/', 'LandingController@dashboard')->name('landing.dashboard');

// CONTRACT CRUD
Route::resource('/contracts', 'ContractController');

// PDF DOWLAOD
Route::get('/contracts{id}/pdf-download', 'ContractController@pdfDownload')->name('pdf.download');
