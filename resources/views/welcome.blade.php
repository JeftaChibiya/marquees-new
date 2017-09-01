@extends('layouts.main')
@section('title', 'Home')

@section('content')

<div class="container">
  <div class="container-content">
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child party_tents bg-cover">
            <div class="title-box">         
              <p class="title is-white">Parties</p>               
            </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child warehouse_tents bg-cover">
            <div class="title-box">                    
            <p class="title">Commercial</p>              
            </div>        
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child gazebos bg-cover">
            <div class="title-box">                    
            <p class="title">Gazebos</p>              
            </div>        
        </article>
      </div>      
    </div> 

    <div class="tile is-ancestor">
     {{-- accessories --}}
      <div class="tile is-parent is-8">
        <article class="tile is-child accessories bg-cover">  
            <div class="title-box">                    
              <p class="title">Accesories</p>              
            </div>                  
        </article>
      </div>
      {{-- byo --}}
      <div class="tile is-parent">
        <article class="tile is-child box">
            <span>Build bespoke designs with </span>            
            <p class="title">Marquee Builder</p>
          <figure>
            <img src="/images/blueprint.jpg" alt="">                
          </figure>
        </article>
      </div>
    </div>    

     {{-- past work or client  --}}
{{--     <img-slider></img-slider> 
    <br/> --}}  
</div>


@endsection