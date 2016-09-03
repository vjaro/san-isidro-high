<?php

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/', function () {
        return view('home');
    });

    Route::auth();

    Route::resource(
        'students', 'StudentsController', ['only' => ['index', 'create']]
    );
});