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
    Route::get('/{departmentId}/delete', 'DepartmentController@delete')->name('delete');
    Route::post('/{departmentId}/update', 'DepartmentController@update')->name('update');
    Route::post('/register', 'DepartmentController@register')->name('register');
    
    Route::name('programme.')
    ->prefix('/programme')
    ->group(function (){
        Route::get('/{departmentId}', 'ProgrammeController@index')->name('index');
        Route::get('/{programmeId}/delete', 'ProgrammeController@delete')->name('delete');
        Route::post('/{departmentId}/register', 'ProgrammeController@register')->name('register');
        Route::post('/{programmeId}/update', 'ProgrammeController@update')->name('update');
        
        Route::name('course.')
        ->prefix('/course')
        ->group(function (){
            Route::get('/{programmeId}', 'CourseController@index')->name('index');
            Route::get('/{courseId}/delete', 'CourseController@delete')->name('delete');
            Route::post('/{programmeId}/register', 'CourseController@register')->name('register');
            Route::post('/{courseId}/update', 'CourseController@update')->name('update');
            
            Route::name('resource.')
            ->prefix('/resource')
            ->group(function (){
                Route::get('/{courseId}', 'ResourceController@index')->name('index');
                Route::get('/{resourceId}/delete', 'ResourceController@delete')->name('delete');
                Route::post('/{courseId}/register', 'ResourceController@register')->name('register');
            });
        });
    });
});

Route::middleware(['auth:sanctum', 'verified'])
    ->name('student.')
    ->prefix('/student')
    ->group(function (){
        Route::get('/', 'StudentController@index')->name('index');
        Route::post('/register', 'StudentController@register')->name('register');
        
    });
