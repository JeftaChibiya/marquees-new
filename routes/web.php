<?php


Auth::routes();

// gets
Route::get('/', 'PagesController@index')->name('home');
Route::get('/support', 'PagesController@help')->name('support');
Route::get('/about-us', 'PagesController@about')->name('about');
Route::get('/contact-us', 'PagesController@contact')->name('contact.create');
Route::get('admin', 'AdminController@index');
Route::get('manage-catalog', 'AdminController@catalog');
Route::get('manage-categories', 'AdminController@categories')->name('manage-categs');
Route::get('manage-users', 'AdminController@users')->name('manage-users');        
Route::get('edit-user/{id}', 'AdminController@edit');
Route::get('create-user', 'UsersController@create');
Route::get('byo', 'BYOCOntroller@index')->name('byo');
Route::get('create-product', 'ProductsController@create');
Route::get('create-categ', 'CategoriesController@create');
Route::get('category/{id}/view', 'CategoriesController@view');
Route::get('products', 'ProductsController@all');
Route::get('show-categories', 'CategoriesController@getAll')->name('show-categories');
Route::get('categories', 'CategoriesController@all');
Route::get('manage-attributes', 'AttributesController@index');
Route::get('/users', 'UsersController@all');
Route::get('/test-view', 'PagesController@test');
Route::get('/create-real-entity', 'AdminController@createRealEntity');
Route::get('contact-confirmation', 'ContactController@contactConfirm')->name('contact.confirmation');

// Single Item
Route::get('product/{id}', 'ProductsController@getProduct');
Route::get('category/{id}', 'CategoriesController@getCategory');
Route::get('shape/{id}', 'ShapesController@getShape');
Route::get('custom/{id}', 'ShapesController@customShape');
Route::get('/shapes', 'ShapesController@getAll');
Route::get('/shapes-images', 'ShapesController@getAllShapeImages');
Route::get('category/{id}/products', 'CategoriesController@show')->name('category-products');
Route::get('quote-confirmation', 'CategoriesController@quoteConfirm')->name('quote-confirmation');
Route::get('product/{id}/edit', 'ProductsController@edit')->name('edit-product');
Route::get('product/{id}/view', 'ProductsController@view')->name('view-product');
Route::get('category/{id}/edit', 'CategoriesController@edit')->name('edit-category');
Route::get('create-attribute', 'AttributesController@create');
Route::get('product.index', 'ProductsController@index');
Route::get('event.all', 'EventsController@all');
Route::get('event.manage', 'EventsController@index')->name('event.manage');
Route::get('event/{id}/edit', 'EventsController@edit')->name('event.edit');
Route::get('service-steps', 'PagesController@steps')->name('service-steps');
Route::get('category/{id}/quote', 'CategoriesController@requestService')->name('category-request');
Route::get('event.create', 'EventsController@create');
Route::get('builder', 'BYOCOntroller@builder');

// POSTS
Route::post('category', 'CategoriesController@store');
Route::post('/event', 'EventsController@store');

Route::get('assign-role/{id}', 'AdminController@assignRole');
Route::get('verify-password', 'AdminController@verifyPassword');
Route::post('verify-user', 'AdminController@postPasswordVerification');

Route::patch('/update-category/{id}', 'CategoriesController@update');
Route::patch('/update-event/{id}', 'EventsController@update');
Route::post('products', 'ProductsController@store');
Route::post('attribute', 'AttributesController@store');
Route::post('/register-user', 'UsersController@register');
Route::post('/shape', 'ShapesController@store');
Route::post('/send', 'ContactController@send')->name('send');
Route::post('/quotation-request', 'ContactController@quotation')->name('quotation-req');
//add image to product 
Route::post('product/{id}/images', ['as' => 'product_images_path', 'uses' =>'ImagesController@store']);
//add image to shape
Route::post('shape/{id}/images', ['as' => 'shape_images_path', 'uses' =>'ShapesController@addImages']); 


// PATCHING / UPDATING
Route::patch('/product/{id}', 'ProductsController@update');
Route::patch('/event/{id}', 'EventsController@update');
Route::patch('image/{dropbox_id}', 'ImagesController@update');

// DELETES
Route::delete('category/{id}', 'CategoriesController@destroy');
Route::delete('product/{id}', 'ProductsController@destroy');
Route::delete('user/{id}', 'UsersController@destroy');