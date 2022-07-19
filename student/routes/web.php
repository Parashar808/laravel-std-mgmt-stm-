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

// Route::resource('student','StudentController');

Route::get('student','StudentController@index')->name('student.index');

Route::get('student/create','StudentController@create')
    ->name('student.create');

Route::post('student','StudentController@store')
    ->name('student.store');

Route::get('student/{id}/edit','StudentController@edit')->name('student.edit');

Route::patch('student/{student_id}','StudentController@update')->name('student.update');

Route::delete('student/{student_id}','StudentController@destroy')->name('student.destroy');


// Route for faculty
Route::resource('faculty', 'FacultyController');

Route::resource('semester', 'SemesterController');

Route::resource('batch', 'batchController');