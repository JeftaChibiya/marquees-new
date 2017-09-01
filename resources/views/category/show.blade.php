@extends('layouts.main')
@section('title', 'Home')
@section('breadcrumbs', Breadcrumbs::render('category-products', $category->id))

@section('content')
	
	<div class="container">
    <div class="container-content">
      
      <p class="title is-3 has-text-centered">{{ $category->name }}</p> 

      <section class="section">     

        @foreach($products->chunk(4) as $chunk)
           <div class="columns is-0 is-variable">
            @foreach($chunk as $product)
              <div class="column is-one-quarter is-half-mobile">
                <a href="/product/{{ $product->id }}/show">
                  <figure class="image is-1by1">
                    <img src="/{{ $product->cover->thumbnail_path }}" alt="">                      
                  </figure>              
                </a>
                <div class="title-box">
                  <p class="subtitle is-4"><b>{{ $product->name }}</b></p>                    
                </div>                
              </div>
            @endforeach
           </div>     
        @endforeach         
      </section>
     
    </div>
  </div>


@endsection