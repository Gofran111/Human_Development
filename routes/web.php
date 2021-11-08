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
//     //dd('check name');
//     return "welocm to laravel";
//     //return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


//blad = نماذج
/*هو يغير النماذج التصميم 
يعمل تغيرات حيث يمكن الوصول لل titlel
او اي جزء 
*/
// Route::resource('project','ProjectController');
//we call it in php artisan route:list


// routes
//////-------------------------------------
//download && show
Route::get('/pages/download/{file}', 'PostsController@download');
Route::get('/pages/downloadVideo/{file}', 'PostsController@downloadVideo');
Route::get('/view/{data}', 'PagesController@view');
Route::get('/viewVideo/{videos}', 'PagesController@viewVideo');
//-------------------------------------
//Store
Route::post('/view/{book}/store', 'CommentsController@store');
Route::post('/viewVideo/{video}/storeVC', 'CommentsController@storeVC');

// //search
Route::post('/about', 'PagesController@search');
Route::post('/services', 'PagesController@searchV');

//___________________________________________________________________

//Delete Files
Route::delete('/pages/{book}/delete', 'PagesController@delete')->name('pages.delete');
Route::delete('/pages/{video}/deleteVideo', 'PagesController@deleteVideo')->name('pages.deleteVideo');


//Delete Comments
Route::delete('/view/{book}/{id}/destroy', 'CommentsController@destroy')->name('view.destroy');
Route::delete('/viewVideo/{video}/{id}/deleteV', 'CommentsController@deleteV')->name('viewVideo.deleteV');

//_________________________________________________________________________

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//________________________________________________________________________

//test
Route::get('/access_denied','ContentController@accessDenied');

//test group
Route::group(['middleware'=> 'roles','roles'=>['admin']],function(){

    Route::get('/admin','ContentController@admin');
    Route::get('/add_role','ContentController@addRole');

});

///
Route::group(['middleware'=> 'roles','roles'=>['Editor', 'Admin']],function(){

    Route::get('/editor','ContentController@editor');
    Route::post('/settings','ContentController@settings');

    //book
    Route::get('/posts/upload', 'PostsController@getView');
    Route::post('/about', 'PostsController@insert');
    //video
    Route::get('/posts/uploadvideo', 'PostsController@getVideo');
    Route::post('/services', 'PostsController@insertVideo');

});


// Route::get('/admin', [
// 'uses'=>'ContentController@admin',
// 'as'=>'content.admin',
// 'middleware'=> 'roles',
// 'roles'=>['admin'],
// ]);

// Route::post('/add-role', [
//     'uses'=>'ContentController@addRole',
//     'as'=>'content.admin',
//     'middleware'=> 'roles',
//     'roles'=>['admin'],
//     ]);
