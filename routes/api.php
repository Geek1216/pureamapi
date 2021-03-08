<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Authentication api routes
Route::post('auth/check', 'UserController@check');
Route::post('auth/signin', 'UserController@login');
Route::post('auth/signup', 'UserController@register');
Route::post('auth/password-reset', 'UserController@passwordReset');

Route::middleware('auth')->group(function () {
    Route::get('/auth/logout', 'UserController@logout');
	Route::post('/auth/update-password', 'UserController@updatePassword');
	Route::get('/auth/user', 'UserController@getUser');
});

Route::apiResource('companies', CompanyController::class)->only(['edit', 'update', 'index', 'store'])->middleware('auth');

Route::get('subjects/topics', 'SubjectController@getTopics')->middleware('auth');
Route::get('subjects/starting-point', 'SubjectController@getStartPoint')->middleware('auth');
Route::apiResource('subjects', SubjectController::class)->only(['show'])->middleware('auth');
Route::post('subjects/submit-answer', 'SubjectController@submitAnswer')->middleware('auth');