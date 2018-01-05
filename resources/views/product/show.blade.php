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
	    	<figure class="is-1by1">
	    		<img :src="'/'+product.cover.path" alt="">
	    	</figure>
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
		      <a class="button is-success is-medium" @click="showModal = true" id="show-modal">
		      	REQUEST NON-BINDING OFFER
		      </a>		       	
	       </p>

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
  	<div class="column is-8">
			<transition-group name="fade" tag="div" class="columns">		  		
  			<div class="column" v-for="image in product.images" :key="image.id">
  				<img :src="'/'+image.thumbnail_path" alt="">
  			</div>	  			
		</transition-group>		  						
  	</div>
  </div>		  	  	
  </div>
</div>
</product-show>

@endsection