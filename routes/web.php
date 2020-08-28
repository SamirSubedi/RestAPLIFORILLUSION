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

Route::get('/', 'HomeController@index');
Route::get('/blog1', 'HomeController@blog');
Route::get('/imagealbum', 'HomeController@image');
Route::get('/search', 'HomeController@search');
Route::get('/apply', 'HomeController@apply');
Route::get('/message', 'HomeController@message');
Route::get('/videos', 'HomeController@video');
Route::get('/admin/home', 'AdminHomeController@index');
Route::get('/DownloadsUser', 'HomeController@download');
Route::get('/blog-details/{slug?}','HomeController@post');
Route::get('/verifyEmailfirst','Auth\RegisterController@verifyEmailfirst')->name('verifyEmailfirst');
Route::get('/verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('facebook', function () {

    return view('facebook');

});
Route::get('/profile', 'HomeController@profile');
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');

Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');
Route::get('/services', function () {
    return view('services');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');
Route::get('apply', 'ApplyFormController@create')->name('apply.create');
Route::post('apply', 'ApplyFormController@store')->name('apply.store');
Route::resource('blog', 'BlogController');
Route::resource('category', 'CategoryController');
Route::resource('download', 'DownloadController');
Route::resource('album', 'AlbumController');
Route::resource('gallery', 'GalleryController');
Route::resource('bartender', 'BartenderController');
Route::resource('video', 'VideoController');




	// Users Routes

	// Roles Routes

	// Permission Routes

	// Post Routes
  
	// Admin Auth Routes


Auth::routes();
//same route can ne made same name with different function of get and post
Route::get('admin-login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Admin\Auth\LoginController@login');




