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

Route::group(['middleware' => 'prevent-back-history'], function() {

    Route::group(['middleware' => 'guest'], function () {
        Route::get('/admin/login', 'adminController@login');
    });

    Route::group(['middleware' => 'auth'], function() {
        Route::get('/admin/alldata', 'adminController@alldata');
        Route::get('/admin/{id}/edit', 'adminController@edit');
        Route::get('/admin/{id}/delete', 'adminController@delete');
        Route::patch('/admin/update/{id}', 'adminController@update');
        Route::delete('/admin/destroy/{id}', 'adminController@destroy');
    });
});
//Route::resource('crud', 'crudController');
//Route::auth();
//Route::get('/home', 'HomeController@index');






