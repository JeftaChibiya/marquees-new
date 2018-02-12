@extends('layouts.main')
@section('title', 'Product')
@section('breadcrumbs', Breadcrumbs::render('show-product', $product->id))

@section('content')

<product-show  :product="{{ $product }}" :attributes="{{ $attributes }}" inline-template>

<div class="container">
  <div class="container-content">
	<p class="title is-3">@{{ product.name }} </p><br/>

	<div class="tile is-ancestor">
	  <div class="tile is-parent is-8">
	    <article class="tile is-child card">
			<!-- Swiper -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
					@foreach($productImgLinks['entries'] as $image)        
						<div class="swiper-slide">
							<img src="{{ $client->getTemporaryLink('/'. $product->id . '/' . $image['name']) }}" 
								onclick="currentSlide(1++)" style="width: 100%" alt="">	
						</div>
					@endforeach	       
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>	
									
	    </article>		
	  </div>

	  <div class="tile is-parent">
	    <article class="tile is-child box">
	      <div class="content">
	        <p class="subtitle is-4"><b>Dimensions</b></p>
	        <table class="table">
	        	<thead>
	        		<tr>
	        			<th>Span</th>
	        			<th>by</th>
	        			<th>Length</th>		        			
	        		</tr>
	        	</thead>
	        	<tbody>
	        		<tr>
	        			<td>
	        				<p class="select">
	        				  <select v-model="span">		        				  
		        				  <option :value="attribute.span" v-for="attribute in attributes">
		        				  		@{{ attribute.span }}
		        				  </option>
		        			  </select>
	        				</p>
	        			</td>	
	        			<td>X</td>
	        			<td>
	        				<p class="select">
	        				  <select v-model="length">
		        				  <option :value="attribute.length" v-for="attribute in attributes">
		        				  		@{{ attribute.length }}
		        				  </option>	        				  	
	        				  </select>
	        				</p>		        				
	        			</td>        										        			
	        		</tr>
	        	</tbody>
	        </table>
	      </div>
	      <p class="subtitle is-4">Totals: <span class="subtitle is-3">£ <b>@{{ subtotal }}</b></span> including VAT</p>
	       <br/>

	       <p class="has-text-centered">
		      <a class="button is-success is-medium" style="width: 100%" @click="showModal = true" id="show-modal">
		      	REQUEST NON-BINDING OFFER
		      </a>		       	
	       </p>
				 <br/>
				 <div class="content-para">
				 	<ul>
						 <li><b>Product Color:</b> White</li>
						 <li><b>Frame: </b>
						 Anodised aluminium alloy forms the main parts of frame, and hot-dip galvanized steel for smaller metal parts.</li>
					 </ul>
					 <br/>
						<div class="has-text-centered control-text">
								<a href="/help"><b>More Info</b></a> 
						</div> 									 	
				 </div>

		  <modal v-if="showModal">
		    <p class="subtitle is-4" slot="header">REQUEST NON-BINDING OFFER</p>
		   
		   {{-- body --}}
		    <div slot="body">
		    	<div class="notification is-light">
			    	<p class="subtitle is-5">
			    		<b>@{{ product.name }}</b>, @{{ span }}m x @{{ length }}m, £@{{ subtotal }} 
				    </p>			    		
		    	</div>

		    	<p class="subtitle is-6">
		    		We place great value on personal contact. Please provide us your contact details & we'll call you back to discuss further details.
		    	</p>
				
				<div class="columns">
					<div class="column is-8 is-offset-2">
						{{-- contact form --}}
						<div class="field">
							<div class="control">
								<label class="label">Select Title:</label>
								<label class="radio">
									<input type="radio" name="question">
									Mr
								</label>
								<label class="radio">
									<input type="radio" name="question">
									Mrs
								</label>
								<label class="radio">
									<input type="radio" name="question">
									Miss
								</label>
								<label class="radio">
									<input type="radio" name="question">
									Ms
								</label>												
							</div>
						</div>

						<div class="field is-horizontal">
							<div class="field-body">
								<div class="field">
									<label class="label">First name</label>    
									<p class="control">
										<input class="input" type="text" placeholder="firstname">
									</p>
								</div>
								<div class="field">
									<label class="label">Lastname</label>  
									<p class="control is-expanded">
										<input class="input" type="email" placeholder="Lastname">
									</p>
								</div>
							</div>
						</div>

						<div class="field is-horizontal">
							<div class="field-body">
								<div class="field">
									<label class="label">Email:</label>
									<p class="control">
										<input class="input" type="tel" placeholder="yourname@mail.com">
									</p>
								</div>
							</div>
						</div>

						<div class="field is-horizontal">
							<div class="fields">
								<div class="control">
									<label class="label">Telephone:</label>				   	
								</div>
								<p class="help">Do not enter the first zero</p>
							</div>
						</div>
						<div class="field is-expanded">
							<p class="control">
								<input class="input" type="tel" placeholder="Your phone number">
							</p>
						</div>			         												    	
				    </div>						
					</div>
				</div>
		    {{-- end of body --}}

			<div slot="footer">
			  <div class="column is-8 is-offset-2">			
				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<div class="control">
								<button class="button is-dark is-medium">
									SUBMIT
								</button>
							</div>
						</div>
						<div class="field">
							<div class="control">
								<button class="button is-light is-medium modal-default-button" @click="showModal = false">
									X CANCEL
								</button>
							</div>
						</div>						
					</div>					
				</div>
				</div>
			  </div>			    
		  </modal>		       		      

	    </article>
	  </div>
	 </div>
	 
	 <div class="columns">
		 <div class="column">
			 <div class="content-padding">
				<p class="title is-5">Specification</p>			 
				<p class="content-para">
					Product Color: White
					Span: The common span size for these party tent is 6m, 8m, 10m, 15m, 18m, 20m, 25m, 30m, 40m.
					Length: Extendable by adding further bays.
					Frame: The main parts of the frame are made of anodised aluminium alloy
					whilst smaller metal parts are made of hot-dip galvanized steel.
					Cover: Roof and sidewall fabric covers are made of double pvc coated flame retardant polyester textile.
					Fire Safety: Flame retardant
					Water Resistance: 100% waterproof
					Key Features: Easy to assemble and dismantle into a small package. 
					When the structure is assembled, there are no poles inside, leaving the internal space clear for use.				 
				</p>					 
			 </div>		 
		 </div>
		 <div class="column">
			 <div class="content-padding">
				<p class="title is-5">Perfect Accessories</p>	
				<p class="content-para">
					Liners, Doors, Carpets, Bars, Ch						
				</p>				 
			 </div>	 
		 </div>
	 </div>

   </div>
  </div>
</product-show>

@endsection