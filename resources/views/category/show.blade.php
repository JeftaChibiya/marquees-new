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

    <br/>
    
	  <div class="container">
      <div class="container-content">    
      <div class="columns">
        <div class="column is-6">      
            <p class="subtitle is-6 para">
              <span>
                {{ $category->brief_desc }}
              </span>
            </p>         
          </div>
        </div>
        
        <!-- category products -->                           
        <div class="products-show">
          @foreach($category->products->chunk(3) as $productSet)           
            <div class="columns is-gapless">
                @foreach($productSet as $product)   
                    <a class="column {{ $loop->first && $loop->count === 1 ? 'is-4-desktop' : '' }}" href="/product/{{ $product->id }}/show">
                        <article class="tile is-child product-presentation">                                    
                              <img src="{{ $client->getTemporaryLink('/' . $product->id . '/' .  $product->cover['name']) }}" style="width: 100%" alt="{{ $product->name }}">                                   
                        </article>               
                    </a> 
                @endforeach             
            </div>                              
          @endforeach         
        </div>
        @empty($category->products)
          <p></p>
        @endempty
                       
        <br/>         

        <div class="columns">
          <div class="column is-8">
            <div class="bg-cover" style="background-image: url({{ $categoryEventCover }})">
              <div class="overlay center-all">                  
                <p class="subtitle is-5 white">{{ $category->name }}</p>                              
              </div>           
            </div>           
            <p class="subtitle is-4 has-text-centered"> {{ $category->name }} </p>          
          </div>

          <div class="column">  
            <div class="bg_request bg-cover">
              <div class="overlay center-all">                  
                <p class="subtitle is-5">
                  <button class="button is-success">Request a quote</button>
                </p>                              
              </div>           
            </div>              
          </div>
        </div>
          
       </div>          

    </div>
  </div>
  

@endsection