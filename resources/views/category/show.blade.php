@extends('layouts.main')
@section('title', 'Home')
@section('breadcrumbs', Breadcrumbs::render('category-products', $category->id))

@section('content')
	
  <div class="category-intro bg-center" style="background-image: url('/images/party/cat_party.jpg')">    
    <div class="container">
      <div>
        <p class="title is-2 white"> <b>{{ $category->name }}</b></p>         
      </div>      
    </div>  
  </div>    

	  <div class="container">
      <div class="container-content">    
      <div class="columns">
        <div class="column is-6">      
            <p class="subtitle is-6 para">
              <span>
                Ideal for engagement, anniversaries, celebrations and get-togethers.               
              </span>
            </p>         
          </div>
        </div>
        
      <div class="columns">
          @foreach($products as $product)
            <div class="column">
              <a href="/product/{{ $product->id }}/show">          
                <img src="/{{ $product->cover->path }}" alt="">
              </a>  
            </div>
          @endforeach
       </div>        

       <div class="has-text-centered">
         <button class="button is-dark"> view more &nbsp;
            <span class="icon">
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
         </button>
       </div> <br/> 

        <div class="columns">
          <div class="column is-8">
            <div class="real_parties bg-cover">
              <div class="overlay center-all">                  
                  <p class="subtitle is-5 white">
                    <b>Real {{ $category->name }}</b>
                  </p>                              
              </div>          
            </div>           
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

    <!-- @foreach($products->chunk(4) as $chunk)
        <div class="columns is-variable is-1">
          @foreach($chunk as $product)
            <div class="column is-one-quarter">
              <a href="/product/{{ $product->id }}/show">
                <figure class="image is-1by1">
                  <img src="/{{ $product->cover->thumbnail_path }}" alt="">                      
                </figure>              
              </a>
              <div class="title-box">
                <p class="subtitle is-5 roboto"><b>{{ $product->name }}</b></p>                    
              </div>                
            </div>
          @endforeach
        </div>     
      @endforeach -->
    
      <!-- <p class="subtitle is-5">
        <b>
          Call 077 7944 25 91 or click here to request a non-binding quote
        </b>
      </p> -->    

@endsection