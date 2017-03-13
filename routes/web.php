<?php

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

Route::get('/', 'FormsController@index');
Route::get('/website-design', function () {
    return view('pages.website-design');
});
Route::get('/contact', function () {
    return view('pages.contact');
});


Auth::routes();
Route::get('/support', 'HomeController@index');
Route::get('/logout', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/tools', 'FilesController@tools');
Route::get('/billing', 'FilesController@billing');
Route::get('/help', 'FilesController@help');
Route::get('upload', 'FilesController@upload');
Route::post('handleUpload', 'FilesController@handleUpload');
Route::get('deleteFile/{id}', ['as' => 'deleteFile', 'uses' => 'FilesController@deleteFile']);
Route::post('/form/store', 'FormsController@emailSend');
// Route::get('upload/{id}', [
//     'middleware' => 'auth',
//     'uses' => 'FilesController@upload']);


// Route::get('upload', ['as' => 'upload', 'uses' => 'FilesController@upload']);
