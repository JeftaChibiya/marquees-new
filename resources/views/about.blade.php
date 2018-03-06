@extends('layouts.main')
@section('title', 'About Us')
@section('breadcrumbs', Breadcrumbs::render('about'))

@section('content')

<div class="container">
    <section class="section">
        <p class="title is-3"> <b>About Us</b></p> 
        <hr/>           
    </section>                        
</div>    

<div class="container">
    <section class="section">
    <div class="columns">

        <div class="column is-6">
            <p class="title is-2"><b>We help you build the perfect marquee</b></p>
                <p>
                We design and manufacture marquees to suit your 
                requirements, whether for social or industrial purposes. 
                High durability and safety is prioritised on all structures.                       
                </p><br/>
                <a href="/show-categories" class="is-link">Browse examples and real use cases</a>
        </div>

        <div class="column is-4">
            <img src="/images/features/party/party.png" class="img-circle" style="100%" alt="">
        </div>
    </div>

    <hr class="hr-divider">
    <br/>

    <div class="columns">
        <div class="column is-6">
            <img src="/images/features/featured_imgs/blueprint.jpg" style="width: 100%" alt="">
        </div>
        <div class="column">
            <p class="title is-2"><b>Delivery is tailored to your needs</b></p>
                <p>
                We offer options to build your marquee on site or deliver pre-built structures. 
                Additionally, your marquee can be delivered at a time convinient to you.                    
                </p>
        </div>            
    </div>        
    </section> 
</div>    

<hr class="hr-divider">    

<div class="container">
    <div class="content-container">
        <p class="title is-3 has-text-centered">Trusted and Accreditted products</p>         
        <section class="section">           
            <div class="columns">
                <div class="column is-6 is-offset-3 has-text-centered">
                    <p> Our products are recognised for high quality by world class quality standards</p> <br/>
                    <img src="/images/features/featured_imgs/credits.jpg" alt=""> 
                </div>
            </div> 
        </section>       
    </div>        
</div>
@endsection