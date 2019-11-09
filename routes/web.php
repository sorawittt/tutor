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


Route::get('/', 'StudentsController@index');
Route::get('/registerStudent', 'StudentsController@registerStudent');
Route::get('/allStudent', 'StudentsController@students');
Route::get('/editStudent', 'StudentsController@editStudent');
Route::get('/student', 'StudentsController@student');
Route::get('/editPayment', 'StudentsController@editPayment');
Route::get('/deleteEnroll', 'StudentsController@deleteEnroll');

Route::post('/studentInfo', 'StudentsController@studentInfo');
Route::post('/addStudent', 'StudentsController@addStudent');
Route::post('/submitEdit', 'StudentsController@submitEdit');

Route::get('/addCourse', 'CoursesController@addCourse');
Route::get('/courses', 'CoursesController@index');
Route::post('/submitAddCourse', 'CoursesController@submitAddCourse');
Route::get('/editCourse', 'CoursesController@editCourse');
Route::get('/deleteCourse', 'CoursesController@deleteCourse');
Route::get('/registerCourse', 'CoursesController@registerCourse');
Route::post('/submitEditCourse', 'CoursesController@submitEditCourse');
Route::get('/enrollsCourse', 'CoursesController@enrollsCourse');

Route::get('/payment', 'PaymentsController@payment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
