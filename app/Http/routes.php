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

Route::get('/', 'PagesController@index');
Route::get('home', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('staff', 'PagesController@staff');
Route::get('advisory', 'PagesController@advisory');
Route::get('research', 'PagesController@research');
Route::get('partners', 'PagesController@partners');
Route::get('facilities', 'PagesController@facilities');
Route::get('faq', 'PagesController@faq');
Route::get('news', 'PagesController@news');
Route::get('news/{id}', 'PagesController@newsDetails');
Route::get('programs/{id}', 'PagesController@programs');
Route::get('documents', 'PagesController@documents');
Route::get('documents/{id}', 'PagesController@documentsCategory');
Route::get('documents/procurement/{id}', 'PagesController@documentsProcurementCategory');


Route::get('test', 'PagesController@test');

//Route::post('login', 'LandingController@excLogin');
//Route::get('test', array('uses' => 'LandingController@test'));
//Route::controller('articles', 'ArticlesController');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//added
Route::get('/ajax/area', function(){
    $id = Input::get('option');
    $areas = DB::table('area')->where('field_id',$id)->lists('name', 'id');
    return $areas;
});
//Abel and Dammy Development started 10/12/2018