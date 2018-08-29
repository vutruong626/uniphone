<?php  
// Route::get('/test', function () {
//     echo 'test';
// });

Route::get('/','Admin\\CategoryController@getAdmin')->name('dashboard');

Route::prefix('catogory')->group(function () {
	Route::get('/','Admin\\CategoryController@getAdmin');
	Route::get('/list','Admin\\CategoryController@getList')->name('list');
	
	Route::get('/list/add','Admin\\CategoryController@getAdd')->name('add');
	Route::post('/list/add','Admin\\CategoryController@postAdd');

	Route::get('/list/edit{id}','Admin\\CategoryController@getEdit')->name('list_edit');
	Route::post('/list/edit{id}','Admin\\CategoryController@postEdit');
	Route::get('delete{id}','Admin\\CategoryController@getDelete')->name('delete');
	 
//product
});
Route::prefix('product')->group(function () {
	Route::get('/','Admin\\ProductController@getAdmin');
	Route::get('/list_product','Admin\\ProductController@getList')->name('list_product');

	Route::get('/add_product','Admin\\ProductController@getAdd')->name('add_product');
	Route::post('/add_product','Admin\\ProductController@postAdd')->name('add_product');
	//edit
	Route::get('/edit_product/{id}','Admin\\ProductController@getEdit')->name('edit_product');
	Route::post('/edit_product/{id}','Admin\\ProductController@postEdit')->name('edit_product');
	Route::get('delete/{id}','Admin\\ProductController@getDelete')->name('delete_product');
});

//useser
Route::prefix('user')->group(function () {
	Route::get('/','Admin\\ProductController@getAdmin');
	Route::get('/list_user','Admin\\UserController@getList')->name('list_user');

	Route::get('/add_user','Admin\\UserController@getAdd')->name('add_user');
	Route::post('/add_user','Admin\\UserController@postAdd');
	//edit
	Route::get('/edit_user/{id}','Admin\\UserController@getEdit')->name('edit_user');
	Route::post('/edit_user/{id}','Admin\\UserController@postEdit');
	Route::get('delete/{id}','Admin\\UserController@getDelete')->name('delete_user');

});
