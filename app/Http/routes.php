<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    Route::get('/home', 'HomeController@index');

    Route::get('/conditions', function() {
      return view('conditions');
    });
Route::group(['middleware' => 'web'], function () {
	// Generates all routes for Authentication
    Route::auth();

    Route::get('/', function () {
    	return view('welcome');
	});
	// All routes for Profile CRUD
	Route::resource('profile','ProfileController');

  Route::get('/profile/{id}/lebenslauf','ProfileController@lebenslauf');

	Route::resource('jobExperience','JobExperienceController');
	Route::resource('education', 'EducationController');
    Route::resource('languageSkill', 'LanguageSkillController');
    Route::resource('competence', 'CompetenceController');

    Route::post('/handleUpload', 'FileController@handleUpload');
   	//  Route::get('/download/{filename}', 'FileController@download');
   	Route::get('/deleteFile/{id}', ['as' => 'deleteFile' ,'uses' => 'FileController@deleteFile']);
});
