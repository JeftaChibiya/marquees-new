@extends('layouts.main')
@section('title', 'Marquee Hire')

@section('content')

<!-- home intro -->
<div class="home-intro center-all"> 
  <div class="home-intro-brand">
    <img src="/images/branding/19.svg" class="home-intro-brand-img" alt="logo">
  </div>
</div>

<div class="div-margin-top">
<div class="designs-panel">
    <div class="has-text-centered">
        <img src="/images/features/symbols/popper.svg" alt="event-icon" style="width: 55px; height: auto; opacity: .7">
    </div>
    <p class="title has-text-centered is-size-4-mobile is-size-3-desktop"> Designs for your event</p>

    <!-- product categories -->
    <div class="container">
    <div class="container-content">
        
        @foreach($categories->chunk(3) as $categorySet)   
            <div class="tile is-ancestor">      
                @foreach($categorySet as $category)   
                    <a class="tile is-parent presentation {{ $loop->index == 3 ? 'is-8' : ''}}" href="/category/{{ $category->id }}/products">
                        <article class="tile is-child bg-cover" style="background-image: url( {{ $client->getTemporaryLink('/categories/cover_images/' .  $category->cover_image) }} )">
                            <div class="overlay center-vertically padding-all">                  
                                <p class="subtitle is-3 white">
                                    {{ $category->name }}
                                </p>                              
                            </div>         
                        </article>               
                    </a> 
                @endforeach

                @if($loop->last)     
                    <!-- byo -->
                    <a class="tile is-parent presentation" href="">
                        <article class="tile is-child bespoke_designs bg-cover">
                            <div class="overlay center-vertically padding-all">                  
                                <p class="subtitle is-3 white">
                                    Build your own
                                </p>                              
                            </div>             
                        </article>
                    </a>           
                @endif  
            </div>                       
         @endforeach     

   </div> 
   </div>
  </div>    
</div>
    
    <div class="div-margin-top"> 
      <div class="container">
        <div class="has-text-centered">
            <img src="/images/features/symbols/take_note.svg" alt="event-icon" style="width: 55px; height: auto; opacity: .7">
        </div>          
        <p class="title has-text-centered is-size-4-mobile is-size-3-desktop"> Tips for purchasing</p><br/><br/>
    
        <div class="columns is-mobile">
            <div class="column"></div>
                <div class="column is-8">
                    <!-- calculating size  -->
                <div class="columns is-mobile tips">             
                    <div class="column is-3 is-hidden-mobile">
                        <img src="images/features/symbols/size-symbol.png" alt="" style="width: 100%">                  
                    </div>

                    <div class="column">
                        <div class="columns is-mobile is-hidden-tablet is-hidden-desktop">
                            <div class="column is-3">
                                <img src="images/features/symbols/size-symbol.png" alt="" style="width: 100%">                                 
                            </div>
                            <div class="column">
                                <p class="subtitle is-4"><b>Calculate the size</b></p>                                 
                            </div>
                        </div>                        
                        <div class="padding-left">
                            <p class="subtitle is-4 is-hidden-mobile"><b>Calculate the size</b></p> 
                            <div class="content-para">
                                Factors to consider include: 
                                <div class="padding-left">
                                    <ul style="list-style-type: square">
                                        <li>Type of event</li>
                                        <li>Number of guests</li>
                                        <li>Whether guests are seated or standing (minimum 0.70 sq.m / person standing. 1.4sq.m  / person seated )</li>
                                        <li>Space for dance floors, stages or reception areas as needed</li>
                                    </ul>                                     
                                </div>               
                            </div>                              
                        </div>                                
                    </div>
                </div>

                <br/>

                <!-- selecting material -->
                <div class="columns is-mobile tips">
                    <div class="column is-3 is-hidden-mobile">
                        <img src="images/features/symbols/pvc-roll.png" alt="" style="width: auto">                  
                    </div>
                    <div class="column">
                        <div class="columns is-mobile is-hidden-tablet is-hidden-desktop">
                                <div class="column is-3">
                                    <img src="images/features/symbols/pvc-roll.png" alt="" style="width: 100%">                                 
                                </div>
                                <div class="column">
                                    <p class="subtitle is-4"><b>Selecting Tarpaulin Material: PVC or polyethylene (PE)?</b></p>                                 
                                </div>
                        </div>                         
                        <div class="padding-left">
                            <p class="subtitle is-4 is-hidden-mobile"><b>Selecting Tarpaulin Material: PVC or polyethylene (PE)?</b></p>   
                            <p class="content-para">
                                Polyethylene (PE) material is more affordable, but not as durable as Polyvinyl Chloride (PVC), which doubles the lifespan of Polyethylene (PE).
                                Polyvinyl Chloride (PVC) consists of a fabric cloth with PVC coating on the inside, which provides excellent protection from the elements, and is fire resistant                                     
                            </p>                             
                        </div>                               
                    </div>
                </div>  

                <br/>

                <!-- tent type -->
                <div class="columns is-mobile tips">
                    <div class="column is-3 is-hidden-mobile">
                        <img src="images/features/symbols/tent_design.png" alt="" style="width: auto">                  
                    </div>
                    <div class="column">
                        <div class="columns is-mobile is-hidden-tablet is-hidden-desktop">
                                <div class="column is-3">
                                    <img src="images/features/symbols/tent_design.png" alt="" style="width: 100%">                                 
                                </div>
                                <div class="column">
                                    <p class="subtitle is-4"><b>Select Tent Design</b></p>                                 
                                </div>
                        </div>                         
                        <div class="padding-left">
                            <p class="subtitle is-4 is-hidden-mobile"><b>Select Tent Design</b></p>  
                            <p class="content-para">
                                Choose from 5 different designs of marquees that we offer, 
                                including party, acrum, high peak, curved and polygon designs.                                    
                            </p> 
                            
                            <ul class="accordion">
                                <!-- Party -->
                                <li>
                                    <a class="subtitle is-6">Party</a>
                                    <div class="content">
                                        <div class="columns is-mobile">
                                            <div class="column is-4">
                                                <img src="/images/features/designs/party_des.png" style="width: 100%" alt="party tent designs">
                                            </div>
                                            <div class="column is-4">
                                                <img src="/images/features/designs/party_des_2.png" style="width: 100%" alt="party tent designs">                                
                                            </div>
                                            <div class="column is-4">
                                                <img src="/images/features/designs/party_des_3.png" style="width: 100%" alt="party tent designs">                                
                                            </div>
                                        </div> 
                                    </div>
                                </li>

                                <!-- Acrum -->
                                <li>
                                    <a class="subtitle is-6">Acrum</a>
                                    <div class="content">
                                        <div class="columns is-mobile">
                                            <div class="column is-4">
                                                <img src="/images/features/designs/acrum_des_1.png" style="width: 100%" alt="party tent designs">
                                            </div>
                                            <div class="column is-4">
                                                <img src="/images/features/designs/acrum_des_2.png" style="width: 100%" alt="party tent designs">                                
                                            </div>
                                            <div class="column is-4">
                                                <img src="/images/features/designs/acrum_des_3.png" style="width: 100%" alt="party tent designs">                                
                                            </div>
                                        </div> 
                                    </div>
                                </li>
                                
                                <!-- High Peak Design -->
                                <li>
                                    <a class="subtitle is-6">High Peak</a>
                                    <div class="content">
                                        <div class="columns is-mobile">
                                            <div class="column is-4">
                                                <img src="/images/features/designs/high_peak_des_1.png" style="width: 100%" alt="party tent designs">
                                            </div>
                                            <div class="column is-4">
                                                <img src="/images/features/designs/high_peak_des_2.png" style="width: 100%" alt="party tent designs">                                
                                            </div>
                                            <div class="column is-4">
                                                <img src="/images/features/designs/high_peak_des_3.png" style="width: 100%" alt="party tent designs">                                
                                            </div>
                                        </div> 
                                    </div>
                                </li>

                                <!-- curved design -->                                
                                <li>
                                    <a class="subtitle is-6">Curved</a>
                                    <div class="content">
                                        <div class="columns is-mobile">
                                            <div class="column is-4">
                                                <img src="/images/features/designs/curved_des_1.png" style="width: 100%" alt="party tent designs">
                                            </div>
                                            <div class="column is-4">
                                                <img src="/images/features/designs/curved_des_2.png" style="width: 100%" alt="party tent designs">                                
                                            </div>
                                        </div> 
                                    </div>
                                </li>
                                <!-- polygon design -->                                
                                <li>
                                    <a class="subtitle is-6">Polygon</a>
                                    <div class="content">
                                        <div class="columns is-mobile">
                                            <div class="column is-4">
                                                <img src="/images/features/designs/polygon_des_1.png" style="width: 100%" alt="party tent designs">
                                            </div>
                                            <div class="column is-4">
                                                <img src="/images/features/designs/polygon_des_2.png" style="width: 100%" alt="party tent designs">                                
                                            </div>
                                            <div class="column is-4">
                                                <img src="/images/features/designs/polygon_des_3.png" style="width: 100%" alt="party tent designs">                                
                                            </div>
                                        </div>   
                                    </div>
                                </li>
                                
                            </ul>
                                                                                                                                                               
                        </div>                               
                    </div>
                </div>                
                
                    <div class="has-text-centered control-text">
                        <a href="/help"><b>READ MORE</b></a> 
                    </div>           
                </div>	

                <div class="column"></div>
            </div>            
            </div>    
        </div>

   </div>   
</div>


@endsection