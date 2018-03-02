<?php

use App\Product;
use App\Category;


// Home
Breadcrumbs::register("/", function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// service steps
Breadcrumbs::register("service-steps", function($breadcrumbs)
{
    $breadcrumbs->parent('/');    
    $breadcrumbs->push('Our Service', route('service-steps'));
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

Breadcrumbs::register('category-request', function($breadcrumbs, $id)
{   
    
    $category = Category::findOrFail($id);
    $breadcrumbs->parent('show-categories');
    $breadcrumbs->push(ucfirst($category->name), route('category-request', $category->id));

});

// Home > Product > named Category > named product 
Breadcrumbs::register('show-product', function($breadcrumbs, $id)
{   
    
    $product = Product::findOrFail($id);
    // $category = $product->categories;

    foreach($product->categories as $category){
        $category;
    }

    $breadcrumbs->parent('category-products', $category->id);
    $breadcrumbs->push(ucfirst($product->name), route('show-product', $product->id));

});


// Home > Build your own Marquee
Breadcrumbs::register('byo', function($breadcrumbs)
{
    $breadcrumbs->parent('/');
    $breadcrumbs->push('Marquee Builder', route('byo'));
});

// Home > Contact page
Breadcrumbs::register('contact.create', function($breadcrumbs)
{
    $breadcrumbs->parent('/');
    $breadcrumbs->push('Contact', route('contact.create'));
});

// Home > Support page
Breadcrumbs::register('support', function($breadcrumbs)
{
    $breadcrumbs->parent('/');
    $breadcrumbs->push('Support', route('support'));
});

// Home > About us
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('/');
    $breadcrumbs->push('About', route('about'));
});