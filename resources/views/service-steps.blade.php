@extends('layouts.main')
@section('title', 'Six Steps of our service')
@section('breadcrumbs', Breadcrumbs::render('service-steps'))

@section('content')
    
    <div class="container">
    <div class="container-content">   
        <p class="title is-2 para">How we provide you service in six steps </p>
        
        <section class="section">
            <ol>
                <li>
                    Fill in request form or call us on 077 442 591
                </li>
                <li>
                    We discuss further details about your event, so we can create an initial quote, 
                    which is emailed out to you when completed
                </li>
                <li>
                    We call you again to discuss the quote, and arrange a visit onto your event site
                </li>
                <li>
                    At the site, we measure up the ideal size for the marquee, and best place to locate the marquee
                </li>
                <li>
                    After site visit, we refine the intial quote, and email it to you confirm the final design
                </li>
                <li>
                    Once you are satisfied, email us to confirm your booking & make a minimum of 
                    30% deposit to reserve your marquee and event date. Construction work then gets under way!
                </li>
            </ol>
        </section>       
        
    </div>          
</div>
  
@endsection