<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['namespace' =>'api' ], function () {
    Route::post('login', 'AuthController@login');
    Route::post('verification', 'AuthController@verification');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'ForgotPasswordController@reset');

    Route::group(['middleware' => 'auth:api' ], function () {
        Route::get('user', 'AuthController@user');
        Route::get('logout', 'AuthController@logout');
        Route::get('countries', 'AuthController@countries');
        Route::apiResource('company', 'CompanyController');
        Route::apiResource('employee', 'EmployeeController');
        Route::apiResource('survey', 'SurveyController');
        Route::apiResource('faq', 'FaqController');
        Route::apiResource('contact_us', 'ContactUsController');
    });
});
