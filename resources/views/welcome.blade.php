@extends('layouts.main')
@section('title', 'Home')

@section('content')

<!-- home intro -->
<div class="home-intro center-all"> 
  <div class="home-intro-brand">
    <img src="/images/watermark_3.png" alt="logo" style="width: 165px; height: auto">
  </div>
</div>
<br/>
<p class="title is-3 has-text-centered"> Designs for your event</p>

<!-- product categories -->
<div class="container">
  <div class="container-content">
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child party_tents bg-cover">
              <div class="overlay center-vertically padding-all">                  
                  <p class="subtitle is-3 white">
                      Parties
                  </p>                              
              </div>         
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child warehouse_tents bg-cover">
              <div class="overlay center-vertically padding-all">                  
                  <p class="subtitle is-3 white">
                      Commercial
                  </p>                              
              </div>         
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child gazebos bg-cover">
              <div class="overlay center-vertically padding-all">                  
                  <p class="subtitle is-3 white">
                      Gazebos & Pagodas
                  </p>                              
              </div>        
        </article>
      </div>           
    </div> 

    <div class="tile is-ancestor">
     <!-- accessories -->
      <div class="tile is-parent is-8">
        <article class="tile is-child accessories bg-cover">  
              <div class="overlay center-vertically padding-all">                  
                  <p class="subtitle is-3 white">
                      Accesories
                  </p>                              
              </div>                 
        </article>
      </div>
     
      <!-- byo -->
      <div class="tile is-parent">
        <article class="tile is-child bespoke_designs bg-cover">
          <a href="/byo">
              <div class="overlay center-vertically padding-all">                  
                  <p class="subtitle is-3 white">
                      Build your own
                  </p>                              
              </div>             
          </a>
        </article>
      </div>
    </div>    
    
    <p class="title is-3 has-text-centered"> Tips when purchasing</p>

<div class="columns">
	<div class="column"></div>

	<div class="column is-10">	
            <div class="tile is-ancestor overview-section">
                <div class="tile is-parent">
                    <div class="tile is-child">
                        <img src="images/scaling-tent.svg" alt="">
                    </div>
                </div>	                    
                <div class="tile is-5 is-vertical is-parent">
                <div class="tile is-child">
                    <p class="subtitle is-4"><b>Calculate the size</b></p><br/>
                    <p class="subtitle is-6">
                    Tents size can be adjusted by extending the span. You can add extra 3m or 5m bays to increase the size of your marquee or structure <br/> <br/>

                    <b>e.g.</b> Purchasing an additional 3 meter bay to increase the size of a 6m x 3m tent to 6m x 6m or 6m x 9m or 6m x 12m etc.</p>
                </div>
                </div>					  
            </div>
                        
            <div class="tile is-ancestor overview-section">
				<div class="tile is-parent">
					<div class="tile is-child">
							<img src="images/pvc.jpg" alt="">
					</div>
				</div>             
                <div class="tile is-5 is-vertical is-parent">
                    <div class="tile is-child">
                        <p class="subtitle is-4"><b>Select Tent Material</b></p><br/>
                        <p class="subtitle is-6"><b>Standard cover material:</b> Polyester (PVC) <br/>
                            <b>Quality:</b>waterproof and fire resistant.</p>
                        </div>
                    </div>
                </div>			 	

				<div class="tile is-ancestor overview-section">
					<div class="tile is-vertical is-parent">
						<div class="tile is-child">
							<p class="subtitle is-4"><b>Select shape tent</b></p><br/>
								<div class="columns">
									<div class="column">
										<p class="subtitle is-5">Party Tents</p>
										<img src="/images/tent_types/party_tents.jpg" alt="">		      	
									</div>		      
									<div class="column">
										<p class="subtitle is-5">Arcum Tents</p>
										<img src="/images/tent_types/arcum_tents.jpg" alt="">
									</div>
									<div class="column">
										<p class="subtitle is-5">High Peak Tents</p>
										<img src="/images/tent_types/arcum_tents.jpg" alt="">
									</div>
								</div>
								<!-- second -->
								<div class="columns">	      
									<div class="column">
										<p class="subtitle">Polygon Tents</p>
										<img src="/images/tent_types/polygon_tents.jpg" alt="">
									</div>
									<div class="column">
										<p class="subtitle">Curved Tents</p>
										<img src="/images/tent_types/curved_tents.jpg" alt="">
									</div>
								</div>		      
							</div>
						</div>
					</div>
		
				 <div class="tile is-ancestor overview-section">
					<div class="tile is-4 is-vertical is-parent">
						<div class="tile is-child">
							<p class="subtitle is-4"><b>Request Quote</b></p><br/>
						</div>
						<div class="tile is-parent">
							<div class="tile is-child">
								<img src="images/blueprint.jpg" alt="">
							</div>
						</div>
					</div>									
                </div>
</div>	

        <div class="column"></div>
    </div> 
</div>   

    <!-- <img-slider></img-slider>   -->
</div>


@endsection