@extends('layouts.admin')
@section('title', 'Marquees Admin')

@section('content')

<div>
    <div class="container">
    <div class="tile is-ancestor">
        <div class="tile is-vertical">
        <div class="tile">
            <div class="tile is-parent is-vertical">
            <article class="tile is-child notification is-light">
                <p class="title"><b>Products</b></p>
                <p class="subtitle">Manage images and appearance of products</p>
            </article>
            <article class="tile is-child notification is-light">
                <p class="title"><b>Order Management</b></p>
                <p class="subtitle">View requests for non-binding offers & customised products</p>
            </article>
            </div>
            <div class="tile is-parent">
            <article class="tile is-child notification original">
                <p class="title"><b>Settings</b></p>
                <p class="subtitle">Add, View Authorised users</p>
            </article>
            </div>
        </div>

        <div class="tile is-parent">
            <article class="tile is-child notification is-dark">
            <p class="title">Website performance</p>
            <div class="content">
            <div class="level">
                <div class="level-item has-text-centered">
                <div>
                    <p class="heading">avg Visits / week</p>
                    <p class="title">-</p>
                </div>
                </div>
                <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Non-binding requests / week</p>
                    <p class="title">-</p>
                </div>
                </div>
                <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Contacts</p>
                    <p class="title">-</p>
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