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

// Route::get('/', function () {
// 	return view('front.index');
// })->name('/');
//Home
Route::get('/', 'Controller@index')->name('/');
Route::get('/portfolios', 'Controller@portfolio')->name('portfolio');
Route::get('/portfolios/{portfolio}/view', 'Controller@viewPortfolio')->name('portfolio.view');
Route::get('/home', function () {
	return view('front.index');
})->name('home');
Route::get('/index', function () {
	return view('front.index');
})->name('index');
Route::get('/about-us', function () {
	return view('front.about');
})->name('about');
Route::get('/contact', function () {
	return view('front.contact');
})->name('contact');
Route::post('/contact', 'Controller@contact')->name('contact');



Auth::routes();
Route::group(['middleware' => 'auth','prefix' => 'admin'],function () {
//Home
Route::get('/home', 'HomeController@index')->name('home');
//Profile
Route::get('/user/profile', 'HomeController@getProfile')->name('profile');
Route::post('user/profile','HomeController@postProfile')->name('profile');
Route::post('user/changepassword','HomeController@changePassword')->name('changepassword');
//Slider
Route::get('/sliders/list/demo', 'HomeController@getSliderListDemo')->name('slider.list.demo');
Route::get('/sliders/list', 'HomeController@getSliderList')->name('slider.list');
Route::get('/sliders/add','HomeController@formSlider')->name('slider.add');
Route::post('/sliders/add','HomeController@postSlider')->name('slider.post');
Route::get('/sliders/{slider}/edit','HomeController@getSliderEdit')->name('slider.edit');
Route::put('/sliders/{slider}/edit','HomeController@updateSlider')->name('slider.update');
Route::get('/sliders/{slider}/delete','HomeController@deleteSlider')->name('slider.delete');
Route::delete('/sliders/delete/all', 'HomeController@deleteAllSliders')->name('slider.delete_all');
Route::get('/sliders/{slider}/download', 'HomeController@downloadSlider')->name('slider.download');
//Portfolio
Route::get('/portfolio/list', 'HomeController@getPortfolioList')->name('portfolio.list');
Route::get('/portfolio/add','HomeController@formPortfolio')->name('portfolio.add');
Route::post('/portfolio/add','HomeController@postPortfolio')->name('portfolio.post');
Route::get('/portfolio/{portfolio}/edit','HomeController@getPortfolioEdit')->name('portfolio.edit');
Route::put('/portfolio/{portfolio}/edit','HomeController@updatePortfolio')->name('portfolio.update');
Route::get('/portfolio/{portfolio}/delete','HomeController@deletePortfolio')->name('portfolio.delete');
Route::post('/portfolio/additionals','HomeController@additionalPortfolio')->name('additionals.upload');
Route::delete('/portfolio/delete/all', 'HomeController@deleteAllPortfolio')->name('portfolio.delete_all');
Route::get('/portfolio/{portfolio}/download', 'HomeController@downloadPortfolio')->name('portfolio.download');
//Images
Route::put('/images/{portfolio}/upload/', 'HomeController@postImageUpload')->name('image.upload');
Route::get('/images/{image}/download', 'HomeController@downloadImage')->name('image.download');
Route::get('/images/{image}/delete','HomeController@deleteImage')->name('image.delete');
Route::delete('/images/delete/all', 'HomeController@deleteAllImages')->name('image.delete_all');

});


Route::group(['prefix' => 'admin'], function () {
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'Auth\LoginController@login');
	Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
  
	Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('/register', 'Auth\RegisterController@register');
  
	Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
	Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.email');
	Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
	Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
  });