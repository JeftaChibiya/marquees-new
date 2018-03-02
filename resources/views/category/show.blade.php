@extends('layouts.main')
@section('title', 'Discover Party, Warehousing designs, and Gazebos & Pagodas')
@section('breadcrumbs', Breadcrumbs::render('category-products', $category->id))

@section('content')

    <!-- category cover image and title -->
    <div class="category-intro bg-center" style="background-image: url({{ $cover_img_link }})">     
      <div class="container">
        <div>
          <p class="title is-1 white"> <b>{{ $category->name }}</b></p>         
        </div>      
      </div>  
    </div>    
    
	  <div class="container">
      <div class="container-content">         
            <p class="subtitle is-6 para">
              <span>
                {{ $category->brief_desc }}
              </span>
            </p>         
        
        <!-- category products -->                           
        <div class="products-show">
          <div id="mygallery">
            @foreach($category->products as $product)
              <div>
                <img src="{{ $client->getTemporaryLink('/' . $product->id . '/' .  $product->cover['name']) }}" style="width: 100%" alt="{{ $product->name }}">
              </div>
            @endforeach
          </div>        
        </div>
        @empty($category->products)
          <p></p>
        @endempty
                       
        <br/>         

        <div class="columns">
          <a href="/event.all" class="column is-8">
             <div class="bg-cover" style="background-image: url({{ $categoryEventCover }})">
                <div class="overlay center-all">                  
                  <p class="subtitle is-3 white">Real {{ $category->name }}</p>                              
                </div>           
            </div> 
          </a>
                    
          <div class="column">  
            <div class="bg_request bg-cover">
              <div class="overlay center-all">                  
                <p class="subtitle is-5">
                  <a href="/category/{{ $category->id }}/quote">
                    <button class="button is-success">Request a quote</button>
                  </a>
                </p>                              
              </div>           
            </div>              
          </div>
        </div>
          
       </div>          

    </div>
  </div>
  

@endsection