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
Route::get('category/{id}/products', 'CategoriesController@show')->name('category-products');
Route::get('product/{id}/show', 'ProductsController@show')->name('show-product');
Route::get('product/{id}/edit', 'ProductsController@edit')->name('edit-product');

// POSTS
Route::post('category', 'CategoriesController@store');
Route::post('products', 'ProductsController@store');
Route::post('attribute', 'AttributesController@store');
Route::post('/register-user', 'UsersController@register');

// PATCHING / UPDATING
Route::patch('/product/{id}', 'ProductsController@update');
Route::patch('image/{id}', 'ImagesController@update');

Route::post('product/{id}/images', ['as' => 'images_photo_path', 'uses' =>'ImagesController@store']);//add image to product 

// DELETES
Route::delete('category/{id}', 'CategoriesController@destroy');
Route::delete('product/{id}', 'ProductsController@destroy');

Route::get('builder', 'BYOCOntroller@builder');

