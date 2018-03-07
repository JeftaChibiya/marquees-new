@extends('layouts.admin')
@section('title', 'Marquees Admin')

@section('content')

<div>
   <div class="container">
    <div class="tile is-ancestor">
        <div class="tile is-vertical">
            <div class="tile">
            <div class="tile is-8 is-vertical">
                <div class="tile">
                <a class="tile is-parent" href="/product.index">
                    <article class="tile is-child notification is-light">
                        <p class="title"><b>Catalog</b></p>
                        <p class="subtitle">A collection of typical marquee designs</p>
                    </article>
                </a>
                <a class="tile is-parent" href="/event.manage">
                    <article class="tile is-child notification is-light">
                        <p class="title"><b>Events</b></p>
                        <p class="subtitle">Real events proceedings involving real clients</p>
                    </article>
                </a>
                </div>
                <a class="tile is-parent" href="/manage-categories">
                    <article class="tile is-child notification is-light">
                        <p class="title">Categories</p>
                        <p class="subtitle">Parties, Warehousing, Accessories and more</p>
                    </article>
                </a>
            </div>
            <a class="tile is-parent" href="/manage-users">
                <article class="tile is-child notification original">
                    <p class="title"><b>Settings</b></p>
                    <p class="subtitle">Add, View Authorised users</p>
                </article>
            </a>      
            </div>  
            
            <div class="tile is-parent">
                <article class="tile is-child notification is-dark">
                    <div class="content">
                        <div class="level">
                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="subtitle is-3" id="todaysDate"></p>
                                </div>
                            </div>

                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="subtitle is-3 heading" id="todaysTime"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>            
        </div>
     </div>
   </div>
  </div>				  
@endsection