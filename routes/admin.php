<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/', function () {
        return view('Admin/index');
    })->name('adminHome');

    #### Admins ####
    Route::resource('admins','AdminController');
    Route::POST('delete_admin','AdminController@delete')->name('delete_admin');
    Route::get('my_profile','AdminController@myProfile')->name('myProfile');


    #### Settings ####
    Route::resource('settings','SettingController');

    #### Services ####
    Route::resource('services','ServiceController');
    Route::POST('delete_service','ServiceController@delete')->name('delete_service');

    #### Services ####
    Route::resource('building','BuildingController');
    Route::POST('delete_building','BuildingController@delete')->name('delete_building');


    #### Partners ####
    Route::resource('partners','PartnerController');
    Route::POST('delete_partner','PartnerController@delete')->name('delete_partner');

    #### job ####
    Route::resource('job','JobController');
    Route::POST('delete_job','JobController@delete')->name('delete_job');
    Route::POST('jobStatus','JobController@jobStatus')->name('jobStatus');

    #### about us ####
    Route::resource('about','AboutUsController');
    Route::POST('delete_about','AboutUsController@delete')->name('delete_about');

    #### contact ####
    Route::resource('contact','ContactController');
    Route::POST('delete_messages','ContactController@delete')->name('delete_contact');

    #### jobContact ####
    Route::resource('jobContact','JobContactController');
    Route::POST('delete_jobContact','JobContactController@delete')->name('delete_jobContact');

    #### request ####
    Route::resource('request','MessageController');
    Route::POST('delete_request','MessageController@delete')->name('delete_request');












    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');
});










