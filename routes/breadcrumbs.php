<?php

use App\Product;
use App\Category;


// Home
Breadcrumbs::register("/", function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > all product categories
Breadcrumbs::register('show-categories', function($breadcrumbs)
{
    $breadcrumbs->parent('/');
    $breadcrumbs->push('Products', route('show-categories'));
});

// Home > Product > named Category
Breadcrumbs::register('category-products', function($breadcrumbs, $id)
{   
    
    $category = Category::findOrFail($id);
    $breadcrumbs->parent('show-categories');
    $breadcrumbs->push(ucfirst($category->name), route('category-products', $category->id));

});

// Home > Product > named Category > named product 
Breadcrumbs::register('show-product', function($breadcrumbs, $id)
{   
    
    $product = Product::findOrFail($id);
    $category = Category::findOrFail($id);

    $breadcrumbs->parent('category-products', $category->id);
    $breadcrumbs->push(ucfirst($product->name), route('show-product', $product));

});

// Home > Build your own Marquee
Breadcrumbs::register('byo', function($breadcrumbs)
{
    $breadcrumbs->parent('/');
    $breadcrumbs->push('Marquee Builder', route('byo'));
});

// Home > Contact page
Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('/');
    $breadcrumbs->push('Contact', route('contact'));
});

// Home > Help page
Breadcrumbs::register('help', function($breadcrumbs)
{
    $breadcrumbs->parent('/');
    $breadcrumbs->push('Help', route('help'));
});