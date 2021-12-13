<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('user/delete/{user_id}', 'HomeController@userdelete')->name('user.delete');

// Profile controller route start
Route::resource('profile','ProfileController');
Route::post('profile/name/post', 'ProfileController@profilenamechange')->name('profile.name.post');
Route::post('profile/photo/post', 'ProfileController@profilephotopost')->name('profile.photo.post');
Route::post('profile/password/post', 'ProfileController@profilepasswordpost')->name('profile.password.post');



//FrontendController
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/history', 'FrontendController@history')->name('history');
Route::get('/publication', 'FrontendController@publication')->name('publication');
Route::get('/still', 'FrontendController@still')->name('still');
Route::get('/service', 'FrontendController@service')->name('service');
Route::get('/shop', 'FrontendController@shop')->name('shop');
Route::get('/insider', 'FrontendController@insider')->name('insider');
Route::get('/gateway', 'FrontendController@gateway')->name('gateway');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/history-details', 'FrontendController@historydetails')->name('history.details');


//ExtraController 

Route::get('/update/parts', 'ExtraController@updateparts')->name('update.parts');
Route::post('/home/presentation/post/{id}', 'ExtraController@homepresentationpost')->name('home.presentation.post');
Route::post('/history/banner/detail/post/{id}', 'ExtraController@bannerdetailpost')->name('history.banner.detail.post');
Route::post('/publication/banner/detail/post/{id}', 'ExtraController@publicationbannerupdate')->name('publication.banner.update');
Route::post('/interview/story/{id}', 'ExtraController@interviewstoryupdate')->name('interview.story.update');
Route::post('/still/banner/update/{id}', 'ExtraController@stillbannerupdate')->name('still.banner.update');
Route::post('/still/banner/two/update/{id}', 'ExtraController@stillbannerupdatetwo')->name('still.banner.two.update');
Route::post('/service/banner/update/{id}', 'ExtraController@servicebannerupdate')->name('service.banner.update');
Route::post('/service/detail/update/{id}', 'ExtraController@servicedetailupdate')->name('service.detail.update');
Route::post('/shop/banner/update/{id}', 'ExtraController@shopbannerupdate')->name('shop.banner.update');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//SocialController
Route::resource('home/social/media', 'SocialController');

//CategoryController
Route::resource('home/shop/category', 'CategoryController');

//MemoryController
Route::resource('home/memoriae', 'MemoryController');

//BannerController
Route::resource('home/banner', 'BannerController');

//Banner_bannerController
Route::resource('home/service/banners', 'Service_bannerController');

//MovementController
Route::resource('home/movement', 'MovementController');


//InsiderController
Route::resource('home/insider', 'InsiderController');


//GetwayController
Route::resource('home/getway', 'GetwayController');

//ContactBoxController
Route::resource('home/contact/box', 'ContactBoxesController');
