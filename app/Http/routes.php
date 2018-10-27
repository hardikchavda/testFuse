<?php

//User Website WOrkout
Route::get('/', 'test1@home');
Route::get('/aboutus', 'test1@abtus');
Route::get('/contactus', 'test1@cntus');
Route::get('/register', 'test1@rgstr');
Route::post('/formSubmit', 'test1@formSubmit');

//Admin Login Workout
Route::get('/admin/login', 'adminController@login');
Route::post('/admin/logincheck', 'adminController@logincheck');
Route::get('/admin/logout', 'adminController@logout');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin/alldata', 'adminController@alldata');
    Route::get('/admin/edit', 'adminController@edit');
    Route::get('/admin/delete', 'adminController@delete');
});

//Route::auth();
//Route::get('/home', 'HomeController@index');






