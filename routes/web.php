<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Api;
use App\Http\Controllers\SurveyController;

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
Route::get('test-pdf', 'SurveyController@testPdfView');
Route::get('/queue_listen', function() {
//    wget https://pharous.dev/ohx/public/queue_listen >/dev/null 2>&1
    $exitCode = Artisan::call('queue:listen');
    return '<h1>Crown Job Done</h1>';
});
//
Route::get('/landing-page', function () {
    return view('update_landing-page');
});
Route::get('/thank', function () {
    return view('thank');
});
Route::get('/thank2', function () {
    return view('thank2');
});
Route::get('/thank_ar', function () {
    return view('thank_ar');
});
Route::get('/error', function () {
    return view('error');
});
Route::get('/landingPage/{id}/{token?}', 'LandingPageController@index');
Route::get('/landingPage/{id}/{survey_company_id}/{token?}', 'LandingPageController@index');
Route::get('/take_survey/{lang}/{survey}/{token?}', 'LandingPageController@take_survey');
Route::get('/take_survey/{lang}/{survey}/{survey_company_id}/{token?}', 'LandingPageController@take_survey');
Route::post('/take_survey', action: 'LandingPageController@SurveySolution');
Route::get('/take_survey2',  'TakeSrveyController@index');
Route::post('/take_survey2/{token?}',  'TakeSrveyController@to_TakeSrvey');


Route::get('/thank_3', 'LandingPageController@thank');
Route::get('companyreport/{company}', 'api\CompanyReportController@reportCompany');

// Route::view('forgot_password', 'auth.reset_password')->name('password.reset');
//         Route::get('/', 'HomeController@index')->name('home');


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['verify']], function () {
        Route::get('index', 'HomeController@index')->name('home');
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('notification', 'NotificationController');
        Route::resource('company', 'CompanyController');
        Route::post('send_specific_mails', 'CompanyController@send_specific_mails');
        Route::resource('company/{survey_company}/live_duration', 'LiveDurationController');
        Route::get('company/{company}/checkquality', 'CheckQualityController@QualityCheck');
        Route::get('company/{company}/report', 'SurveyController@reportCompany');
        Route::get('company/{company}/{type}/dashboard_report', 'SurveyController@reportCompany');
        Route::get('company/{company}/exportReport', 'SurveyController@exportReport');
        Route::get('company/{company}/exportValue', 'SurveyController@exportValue');
        Route::get('exportReport', 'SurveyController@exportReport');
        Route::get('comparison/exportComparison1', 'SurveyController@exportComparison1');
        Route::get('comparison/exportComparison2', 'SurveyController@exportComparison2');

        Route::post('company/importCompany','CompanyController@importCompany');
        Route::resource('survey', 'SurveyController');
        Route::get('comparison/{survey}', 'SurveyController@comparison');
        Route::get('send_specific_mails', 'SurveyController@send_specific_mails');

        Route::post('assign_companies', 'SurveyController@assign_companies');
        Route::resource('support', 'ContactUsController');
        Route::resource('faq', 'FaqController');
        Route::resource('employee', 'EmployeeController');
        Route::get('employee/create/{id}', 'EmployeeController@create');
        Route::post('employee/importEmployee','EmployeeController@importEmployee');

        Route::get('/send-whatsapp-message', 'TwilioController@sendWhatsAppMessage');

        Route::resource('demographic', 'DemographicController');
        Route::resource('demographic_detail', 'DemographicDetailController');
        Route::post('demographic/importDemographic','DemographicController@importDemographic');
        Route::get('/companies/{company}/phases', [SurveyController::class, 'getCompanyPhases']);
    });
    Route::get('/check', 'Auth\LoginController@check')->name('check');
    Route::post('/verify', 'HomeController@verify');

    Route::get('/verify', function () {
        return view('verify');
    });
});
