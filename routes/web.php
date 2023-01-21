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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->name('department.')
    ->prefix('/department')
    ->group(function (){
    Route::get('/', 'DepartmentController@index')->name('index');
    Route::name('resource.')
    ->prefix('/resource')
    ->group(function (){
        Route::get('/{departmentId}', 'ResourceController@index')->name('index');
        Route::post('/{departmentId}', 'ResourceController@register')->name('register');
    });
});

Route::middleware(['auth:sanctum', 'verified'])
    ->name('student.')
    ->prefix('/student')
    ->group(function (){
        Route::get('/', 'StudentController@index')->name('index');
        Route::post('/register', 'StudentController@register')->name('register');
    });
