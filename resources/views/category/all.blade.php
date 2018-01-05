@extends('layouts.main')
@section('title', 'Home')
@section('breadcrumbs', Breadcrumbs::render('show-categories'))

@section('content')
	
	<div class="container">
		<div class="container-content">
    <p class="title is-3">For all purposes</p><br/>

    @foreach($categories->chunk(3) as $chunk)
      <div class="tile is-ancestor">    
          @foreach($chunk as $category)
              <div class="tile is-parent">             
                  <article class="tile is-child box">
                  <a href="/category/{{ $category->id }}/products">                   
                    <p class="title"> {{ $category->name }} </p>
                    <div class="media">
                      <figure class="media-left">
                        <p class="image is-128x128"> 
                          <img src="/images/party/party.png" class="img-circle" alt="">                     
                        </p>
                      </figure>                    
                      <div class="media-content">
                        <div class="content">
                            <p class="subtitle">{{ $category->brief_desc }} </p>                           
                        </div>                       
                      </div>                      
                    </div>
                    <br/>
                  <p class="subtitle">From <b>£1476* </b> including VAT</p>                     
                  </a>                     
                  </article>              
              </div>              
         @endforeach
      </div>
    @endforeach        
    </div>
  </div>


@endsection