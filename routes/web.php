<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('importExportView', 'MyController@importExportView');

Route::get('export', 'MyController@export')->name('export');

Route::post('import', 'MyController@import')->name('import');

Route::get('/index', 'Controller@index')->name('index');
Route::get('/chats', 'PagesController@chats')->name('chats');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');
Route::get('/games', 'PagesController@games')->name('games');
Route::get('/articles', 'PagesController@articles')->name('articles');
Route::get('/article', 'PagesController@article')->name('article');
Route::get('/profile', 'PagesController@profile')->name('profile');
Route::get('/single', 'PagesController@single')->name('single');
Route::get('/biography', 'PagesController@biography')->name('biography');

Route::get('/profilepage', 'UserProfileController@index')->name('profile');
Route::post('/profile/update', 'UserProfileController@updateProfile')->name('update.profile');

Route::get('gallery', 'GalleryImageController@index');
Route::post('gallery', 'GalleryImageController@updateGallery')->name('gallery.update');

Route::get('articles', 'ArticleController@index');
Route::post('articles', 'ArticleController@updateArticle')->name('articles.update');

Route::resource('posts', 'PostController');
Route::resource('books', 'BookController');

Route::resource('blog', 'BlogController');
// Route::post('posts', 'PostController@update')->name('posts.update');

// Route::get('profile.update', 'UserProfileController@show')->middleware('auth')->name('profile.show');
// Route::post('profile.update', 'UserProfileController@update')->middleware('auth')->name('profile.update');

// Route::group(['middleware'=>'authenticate'], function(){
//    Route::get('/home', 'HomeController@index')->name('home');

// });
