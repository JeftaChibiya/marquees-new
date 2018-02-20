@extends('layouts.admin')
@section('title', 'Catalog')

@section('content')

<div>
    <div class="original notice">
        <div class="container">
            <p class="title is-3 white"><b>Catalog</b></p>
        </div>
    </div>	

    <!--  -->
    <div class="container">
        <div class="tile is-ancestor">
            <a class="tile is-parent presentation" href="/product.index">
                <article class="tile is-child bespoke_designs bg-cover notification">
                    <div class="overlay center-vertically padding-all">                  
                        <p class="subtitle is-3">
                            Designs
                        </p>                              
                    </div>             
                </article>
            </a>    
            <a class="tile is-parent presentation" href="/event.manage">
                <article class="tile is-child bespoke_designs bg-cover notification">
                    <div class="overlay center-vertically padding-all">                  
                        <p class="subtitle is-3">
                            Real Events
                        </p>                              
                    </div>             
                </article>
            </a>                     
        </div>          
    </div> 
</div>

@endsection