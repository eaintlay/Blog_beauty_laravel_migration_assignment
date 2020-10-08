<?php

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

 /*Route::get('/', function () {
     return view('welcome');
 });
*/






//Route::resource('items','ItemController');
 Route::group(['middleware' => ['auth','role:blogger']], function () 
 {

 	Route::resource('posts','FrontendPostController');

 	Route::get('blogpage', 'FrontendController@blog')->name('blog');

 	Route::get('readmorepage', 'FrontendController@readmore')->name('readmore');
 	Route::get('parts', 'FrontendController@parts')->name('parts');
 	Route::get('continuereading', 'FrontendController@continue')->name('continue');
 	Route::get('newerpage', 'FrontendController@newer')->name('newer');
 	Route::get('aboutus', 'FrontendController@aboutus')->name('aboutus');
 	Route::get('contactpage', 'FrontendController@contact')->name('contact');
 	Route::get('articlepage', 'FrontendController@articlepage')->name('articlepage');
 	Route::get('commentcreate', 'FrontendController@commentcreate')->name('commentcreate');
 	Route::get('commentedit', 'FrontendController@commentedit')->name('commentedit');
 	//Route::get('commentshow/{id}', 'FrontendController@commentshow')->name('commentshow');
 	Route::get('commentupdate', 'FrontendController@commentupdate')->name('commentupdate');
 	Route::get('commentdestroy', 'FrontendController@commentdestroy')->name('commentdestroy');
 // 	Route::get('postcreate','FrontendController@postcreate')->name('postcreate');

//	Route::post('poststore', 'FrontendController@poststore')->name('poststore');
 // 	Route::get('postpage', 'FrontendController@postpage')->name('postpage');

 // Route::get('postcreate','FrontendController@postcreate')->name('postcreate');
 // Route::get('postedit', 'FrontendController@postedit')->name('postedit');
 
 
 // Route::get('postupdate', 'FrontendController@postupdate')->name('postupdate');

 // Route::get('postshow', 'FrontendController@postshow')->name('postshow');

 // Route::get('postdestroy', 'FrontendController@postdestroy')->name('postdestroy');

 Route::get('post', 'FrontendController@createpost')->name('createpost');

 

 });



 Route::get('post', 'PostController@createpost')->name('createpost');

 Route::get('postcreating', 'FrontendController@post')->name('post');

 Route::resource('articles','ArticleController');

 Route::resource('categories','CategoryController');

 Route::get('articleshow', 'FrontendController@articleshow')->name('articleshow');

 Route::get('indexpage', 'FrontendController@index')->name('index');

 
 Route::get('categorypage', 'FrontendController@categorypage')->name('categorypage');

 	Route::get('commentpage', 'FrontendController@commentpage')->name('commentpage');

 	// Route::get('commentcreate', 'FrontendController@commentcreate')->name('commentcreate');
 	// Route::get('commentedit', 'FrontendController@commentedit')->name('commentedit');
 	// Route::get('commentshow/{id}', 'FrontendController@commentshow')->name('commentshow');
 	// Route::get('commentupdate', 'FrontendController@commentupdate')->name('commentupdate');
 	// Route::get('commentdestroy', 'FrontendController@commentdestroy')->name('commentdestroy');

 Route::get('postpage', 'FrontendController@postpage')->name('postpage');

  Route::get('postcreate','FrontendController@postcreate')->name('postcreate');

  Route::post('poststore', 'FrontendController@poststore')->name('poststore');
 

 Route::get('articledestroy', 'FrontendController@articledestroy')->name('articledestroy');

 Route::get('categorydestroy', 'FrontendController@categorydestroy')->name('categorydestroy');

 Route::get('blogpage', 'FrontendController@blog')->name('blog');
 Route::get('readmorepage', 'FrontendController@readmore')->name('readmore');
 Route::get('parts', 'FrontendController@parts')->name('parts');
 Route::get('continuereading', 'FrontendController@continue')->name('continue');
 Route::get('newerpage', 'FrontendController@newer')->name('newer');
 Route::get('aboutus', 'FrontendController@aboutus')->name('aboutus');
 Route::get('contactpage', 'FrontendController@contact')->name('contact');
//  Route::resource('categories','CategoryController');
 Route::resource('comments','CommentController');

Route::get('commentcreate', 'FrontendController@commentcreate')->name('commentcreate');
 	Route::get('commentedit', 'FrontendController@commentedit')->name('commentedit');
 	Route::get('commentshow', 'FrontendController@commentshow')->name('commentshow');
 	Route::get('commentstore', 'FrontendController@commentstore')->name('commentstore');
 	Route::get('commentupdate', 'FrontendController@commentupdate')->name('commentupdate');
 	Route::get('commentdestroy', 'FrontendController@commentdestroy')->name('commentdestroy');
 Route::resource('posts','PostController');



 









 Auth::routes();



 Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');



 Route::get('allcategorypage', 'FrontendController@allcategory')->name('allcategory');


 Route::get('blogpage', 'FrontendController@blog')->name('blog');

 Route::get('readmorepage', 'FrontendController@readmore')->name('readmore');

 Route::get('continuereading', 'FrontendController@continue')->name('continue');


 Route::get('newerpage', 'FrontendController@newer')->name('newer');

 Route::get('aboutus', 'FrontendController@aboutus')->name('aboutus');

 Route::get('contactpage', 'FrontendController@contact')->name('contact');

 Route::get('/', 'FrontendController@index')->name('index');


 Route::get('articlepage', 'FrontendController@articlepage')->name('articlepage');

 // Route::get('articlecreate', 'FrontendController@articlecreate')->name('articlecreate');

 // Route::get('articleedit', 'FrontendController@articleedit')->name('articleedit');


 // Route::get('articleshow', 'FrontendController@articleshow')->name('articleshow');

 // Route::get('articleupdate', 'FrontendController@articleupdate')->name('articleupdate');



 // Route::get('categorycreate', 'FrontendController@categorycreate')->name('categorycreate');

 // Route::get('categoryedit', 'FrontendController@categoryedit')->name('categoryedit');


 // Route::get('categoryshow', 'FrontendController@categoryshow')->name('categoryshow');

 // Route::get('categoryupdate', 'FrontendController@categoryupdate')->name('categoryupdate');





 Route::get('categorypage', 'FrontendController@categorypage')->name('categorypage');


 Route::get('postpage', 'FrontendController@postpage')->name('postpage');

 //  Route::get('postcreate','FrontendController@postcreate')->name('postcreate');

 // Route::get('postedit', 'FrontendController@postedit')->name('postedit');

 //  Route::post('poststore', 'FrontendController@poststore')->name('poststore');


 // Route::get('postshow', 'FrontendController@postshow')->name('postshow');

 // Route::get('postupdate', 'FrontendController@postupdate')->name('postupdate');








 

 Route::get('new-login',function(){
 	return view ('newLogin');
 });

 Route::get('new-register',function(){
 	return view ('newRegister');
 });

 Route::get('new-forget',function(){
 	return view ('newForget');
 });
