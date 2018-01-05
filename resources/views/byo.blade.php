@extends('layouts.main')
@section('title', 'Build your Tent')
@section('breadcrumbs', Breadcrumbs::render('byo'))

@section('content')

<section class="hero is-small">
<div class="bg-byo hero-body">
<div class="container">
	<div class="column is-4">

		<div class="visorcard">
			<div class="card-content">
				<h2 class="title is-3" style="font-family: raleway; color: white"><b>Build your Tent</b></h2>
				<hr/>
				<div class="content">
					<p class="subtitle is-5">
						<a href="/builder" class="ready-link" target="blank" style="color: white">
							<span class="icon">
								<i class="fa fa-angle-right fa-2x"></i>
							</span>	
							Start Building							
						</a>
					</p>
					<p class="subtitle is-5">
						<a href="#overview" class="ready-link" style="color: white">
							<span class="icon">
								<i class="fa fa-angle-right fa-2x"></i>
							</span>	
							Get an overview					  	
						</a>
					</p>					
					<p class="subtitle is-5">
						<a href="" class="ready-link" style="color: white">
							<span class="icon">
								<i class="fa fa-angle-right fa-2x"></i>
							</span>	
							Request a non-binding offer							
						</a>
					</p>	
				</div>
			</div>
		</div>									
	</div>		 		
</div>		 	
</div>
</section>

<div class="container" id="overview">
<div class="container-content">
<br/>
<div class="columns">
	<div class="column"></div>

	<div class="column is-10">
		<p class="title is-2 is-spaced">
			<b>Build your Tent</b>
		</p>
		<p class="subtitle is-5">
			We exclusively manufacture tents and marquees to customer specifications. To ensure your marquee caters to your event, browse through our range of material, dimensions, tent types and more. 			
		</p><br/>	

		{{-- <button class="button is-dark">START BUILDING</button> --}}

		<hr/>		
		 
		 <div class="tile is-ancestor overview-section">
			<div class="tile is-5 is-vertical is-parent">
				<div class="tile is-child">
					<p class="subtitle is-4"><b>Select Tent Material</b></p><br/>
					<p class="subtitle is-6"><b>Standard cover material:</b> Polyester (PVC) <br/>
						<b>Quality:</b>waterproof and fire resistant.</p>
					</div>
				</div>
				<div class="tile is-parent">
					<div class="tile is-child">
							<img src="images/pvc.jpg" alt="">
					</div>
				</div>
			</div>			 	

				<div class="tile is-ancestor overview-section">
				   <div class="tile is-5 is-vertical is-parent">
					<div class="tile is-child">
						<p class="subtitle is-4"><b>Set Dimensions</b></p><br/>
						<p class="subtitle is-6">
						Tents size can be adjusted by extending the span. You can add extra 3m or 5m bays to increase the size of your marquee or structure <br/> <br/>

						<b>e.g.</b> Purchasing an additional 3 meter bay to increase the size of a 6m x 3m tent to 6m x 6m or 6m x 9m or 6m x 12m etc.</p>
					</div>
				  </div>				
					<div class="tile is-parent">
						<div class="tile is-child">
							<img src="images/scaling-tent.svg" alt="">
						</div>
					</div>		  
			    </div>

				<div class="tile is-ancestor overview-section">
					<div class="tile is-vertical is-parent">
						<div class="tile is-child">
							<p class="subtitle is-4"><b>Select Tent Type</b></p><br/>
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
								{{-- second --}}
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
					   <div class="tile is-parent">
						<div class="is-child">
							<p class="subtitle is-4"><b>Select Doors</b></p><br/>		  
							<div class="columns">
								<div class="column has-text-centered">
									<img src="/images/doors/doors_1.jpg" alt="">		      	
									<p class="subtitle is-5">Door 1</p>
								</div>		      
								<div class="column has-text-centered">
									<img src="/images/doors/doors_2.jpg" alt="">
									<p class="subtitle is-5">Door 2</p>
								</div>
								<div class="column has-text-centered">
									<img src="/images/doors/door_5m_sliding_door.jpg" alt="">
									<p class="subtitle is-5">5 Meter Sliding Door</p>
								</div>
								<div class="column has-text-centered">
									<img src="/images/doors/door_5m_side_panels.jpg" alt="">
									<p class="subtitle is-5">5 Meter Door Side Panels</p>
								</div>		      	
							</div>		  		
						</div>					   	
					   </div>
					</div>	
		
				 <div class="tile is-ancestor overview-section">
					<div class="tile is-4 is-vertical is-parent">
						<div class="tile is-child">
							<p class="subtitle is-4"><b>Save your tent or request a non-binding offer</b></p><br/>
							<p class="subtitle is-6">
								Once your perfect tent is done, you can save it as a PDF format. Re-enter your unique code into the builder to make adjustments to the designs at a later date
							</div>
						</div>
						<div class="tile is-parent">
							<div class="tile is-child">
								<img src="images/blueprint.jpg" alt="">
							</div>
						</div>
					</div>									
				</div>	

				<div class="column"></div>
			</div>		  	
		</div>
	</div>

@endsection