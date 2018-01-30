@extends('layouts.main')
@section('title', 'Discover Party, Warehousing designs, and Gazebos & Pagodas')
@section('breadcrumbs', Breadcrumbs::render('category-products', $category->id))

@section('content')
	
  <div class="category-intro bg-center" style="background-image: url(/uploads/cover_images/categs/{{ $category->cover_image }})">     
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
                {{ $category->brief_desc }}
                <!-- Ideal for engagement, anniversaries, celebrations and get-togethers.                -->
              </span>
            </p>         
          </div>
        </div>

        <div class="columns">

       </div>      

       
       <br/> 
    
      <p class="subtitle is-5">
        <b>
          Call 077 7944 25 91 or click here to request a non-binding quote
        </b>
      </p>         

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
  

@endsection