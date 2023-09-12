<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\DrugController@index')->name('dashboard');
    Route::get('add-drugs', function () {
        return view('add-drugs');
    })->name('add-drugs');
    Route::post('drugs', 'App\Http\Controllers\DrugController@store')->name('drugs.store'); 
    Route::get('drugs', 'App\Http\Controllers\DrugController@create')->name('drugs.create');
    Route::get('drugs-api', 'App\Http\Controllers\DrugController@index')->name('drugs.index');
    Route::get('drugs/{id}', 'App\Http\Controllers\DrugController@show')->name('drugs.show');

});



