<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'namespace' => 'Front',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    ### home ###
    Route::get('/', 'HomeController@index')->name('home');

    ### about us ###
    Route::get('/about-us', 'HomeController@aboutUs')->name('aboutUs');

    ### our projects ###
    Route::get('/our-projects', 'HomeController@projects')->name('projects');
    Route::get('/our-building/{id}', 'HomeController@project')->name('project');
    Route::get('/our-building-all', 'HomeController@projectAll')->name('projectAll');
    Route::get('/our-building-villa', 'HomeController@projectvilla')->name('projectvilla');
    Route::get('/our-building-house', 'HomeController@projecthouse')->name('projecthouse');

    ### request ###
    Route::get('/request', 'HomeController@requestIndex')->name('requestIndex');
    Route::post('/requestPost', 'HomeController@requestStore')->name('requestStore');

    ### contact ###
    Route::get('/contact', 'HomeController@contactIndex')->name('contactIndex');
    Route::post('/contactPost', 'HomeController@contactStore')->name('contactStore');

    ### sells ###
    Route::get('/sells', 'HomeController@sells')->name('sells');

    ### maps ###
    Route::get('/maps', 'HomeController@maps')->name('maps');

    ## partners ###
    Route::get('/partners', 'HomeController@partners')->name('partners');

    ### jobs ###
        Route::get('/jobs', 'HomeController@jobs')->name('jobs');
        Route::get('/job/{id}', 'HomeController@jobDetails')->name('jobDetails');
        Route::post('/jobs-store', 'HomeController@jobStore')->name('jobStore');

    ### search ###
        Route::get('/search', 'SearchController@search')->name('search');

});
