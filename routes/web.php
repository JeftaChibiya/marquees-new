<?php


Auth::routes();

// gets
Route::get('/', 'PagesController@index')->name('home');
Route::get('/help', 'PagesController@help')->name('help');
Route::get('/find-us', 'PagesController@findUs');
Route::get('/contact-us', 'PagesController@contact')->name('contact');
Route::get('backend', 'AdminController@index');
Route::get('byo', 'BYOCOntroller@index')->name('byo');

Route::get('products', 'ProductsController@all');
Route::get('show-categories', 'CategoriesController@getAll')->name('show-categories');
Route::get('categories', 'CategoriesController@all');
Route::get('attributes', 'AttributesController@all');
Route::get('/users', 'UsersController@all');

// Single Item
Route::get('product/{id}', 'ProductsController@getProduct');
Route::get('category/{id}', 'CategoriesController@getCategory');
Route::get('shape/{id}', 'ShapesController@getShape');
Route::get('custom/{id}', 'ShapesController@customShape');
Route::get('/shapes', 'ShapesController@getAll');
Route::get('/shapes-images', 'ShapesController@getAllShapeImages');
Route::get('category/{id}/products', 'CategoriesController@show')->name('category-products');
Route::get('product/{id}/show', 'ProductsController@show')->name('show-product');
Route::get('product/{id}/edit', 'ProductsController@edit')->name('edit-product');

// POSTS
Route::post('category', 'CategoriesController@store');
Route::post('products', 'ProductsController@store');
Route::post('attribute', 'AttributesController@store');
Route::post('/register-user', 'UsersController@register');
Route::post('/shape', 'ShapesController@store');

// PATCHING / UPDATING
Route::patch('/product/{id}', 'ProductsController@update');
Route::patch('image/{id}', 'ImagesController@update');
//add image to product 
Route::post('product/{id}/images', ['as' => 'product_images_path', 'uses' =>'ImagesController@store']);
//add image to shape
Route::post('shape/{id}/images', ['as' => 'shape_images_path', 'uses' =>'ShapesController@addImages']); 

// DELETES
Route::delete('category/{id}', 'CategoriesController@destroy');
Route::delete('product/{id}', 'ProductsController@destroy');

Route::get('builder', 'BYOCOntroller@builder');

