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
							<a href="/builder" class="ready-link" style="color: white">
								<span class="icon">
								  <i class="fa fa-angle-right fa-2x"></i>
								</span>	
								Start Building							
							</a>
						</p>
						<p class="subtitle is-5">
						  <a href="" class="ready-link" style="color: white">
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

<div class="container">
	<section class="section content is-light">
	 	<p class="title is-3">
	 		<b>Build your Tent: Overview</b>
	 	</p>
		<p class="subtitle is-5">
			We exclusively manufacture tents and marquees to customer specifications. Below are the main design parameters, which you can use to request an initial quote.			
		</p>	
		
		<div class="tile is-ancestor">
		  <div class="tile is-4 is-vertical is-parent">
		    <div class="tile is-child">
		      <p class="title"><span class="tag"><b>1</b></span>  Tent Material</p>
		      <p class="subtitle is-5">Our tents use Polyester/PVC material for the cover. The material is a high quality fabric cloth with PVC coated on the inside, is waterproof and fire resistant.</p>
		    </div>
		  </div>
		  <div class="tile is-parent">
		    <div class="tile is-child has-img" style="background-image: url('images/pvc.jpeg');">
		    </div>
		  </div>
		</div>			 	

		<div class="tile is-ancestor">
		  <div class="tile is-parent">
		    <div class="tile is-child has-img" style="background-image: url('images/scaling-tent.svg');">
		    </div>
		  </div>
		  <div class="tile is-6 is-vertical is-parent">
		    <div class="tile is-child">
		      <p class="title"><span class="tag"><b>2</b></span>  Dimensions</p>
		      <p class="subtitle is-5">Our tents are constructed on a modular span system which means you can add extra 3m or 5m bays to increase the size of your marquee or structure.

				For example, if you have a 6m x 3m tent you can purchase an additional 3m bay to increase the size of your tent to 6m x 6m, 6m x 9m, 6m x 12m etc. If you have a 5 metre bay tent you can purchase additional bays to increase the length of your tent by 5 metre multiples.</p>
		    </div>
		  </div>		  
		</div>

		<div class="tile is-ancestor">
		  <div class="tile is-4 is-vertical is-parent">
		    <div class="tile is-child">
		      <p class="title"><span class="tag"><b>3</b></span>  Tent Types</p>
		      <p class="subtitle is-5">
				Please see below the selection of tents that we manufacture. We are available to provide further information and welcome your inquiry.	      </p>
		    </div>
		  </div>
		  <div class="tile is-parent">
		    <div class="tile is-child">
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
		      		<p class="subtitle is-5">Polygon Tents</p>
		      		<img src="/images/tent_types/polygon_tents.jpg" alt="">
		      	</div>
		      	<div class="column">
		      		<p class="subtitle is-5">Curved Tents</p>
		      		<img src="/images/tent_types/curved_tents.jpg" alt="">
		      	</div>
		      </div>		      
		    </div>
		  </div>
		</div>

	  <div class="tile">
	  	<article class="is-child">
	      <p class="title"><span class="tag"><b>4</b></span>  Doors</p>
	      <p class="subtitle is-5">
			Choose from our selection of doors		      	
	      </p>		  
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
	  	</article>
	  </div>		  	

	 </section>

	{{-- contact marquees --}}
	 <section class="section">
		<div class="columns">
			<div class="column"></div>
			<div class="column is-5 notification brand-color">
				<p class="subtitle is-4">Request a non-binding offer</p>

				<div class="field">
					<div class="control">
						<label class="label" style="color: white">Select Title:</label>
						<label class="radio">
							<input type="radio" name="question">
							Mr
						</label>
						<label class="radio">
							<input type="radio" name="question">
							Mrs
						</label>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label" style="color: white">First name</label>    
							<p class="control">
								<input class="input" type="text" placeholder="firstname">
							</p>
						</div>
						<div class="field">
							<label class="label" style="color: white">Lastname</label>  
							<p class="control is-expanded">
								<input class="input" type="email" placeholder="Lastname">
							</p>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label" style="color: white">Email:</label>
							<p class="control">
								<input class="input" type="tel" placeholder="yourname@mail.com">
							</p>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="fields">
						<div class="control">
							<label class="label" style="color: white">Telephone:</label>				   	
						</div>
						<p class="help">Do not enter the first zero</p>
					</div>
				</div>			

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<p class="control">
								<p class="select is-fullwidth">
									<select name="country_code">
										<option value="+44 GB/UK">+44 GB/UK</option>
									</select>				         	
								</p>
							</p>
						</div>
						<div class="field is-expanded">
							<p class="control">
								<input class="input" type="tel" placeholder="Your phone number">
							</p>
						</div>			         	
					</div>	
				</div>


				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label" style="color: white">Subject</label>
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Partnership opportunity">
							</div>
							<p class="help">

							</p>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label" style="color: white">Comment</label>
							<div class="control">
								<textarea class="textarea" placeholder="I would like to tell you about ..."></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<div class="control">
								<button class="button is-light is-medium">
									Send message
								</button>
							</div>
						</div>
					</div>
				</div>					
			</div>
			<div class="column"></div>
		</div>				
	</section>
</div>

@endsection