<template>
	<div>
	  <div class="container">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<router-link to="/catalog">
						<a>
							<span class="icon">
							<i class="fa fa-angle-double-left"></i>
							</span> <span>Back</span>
						</a>						
					</router-link>
				</div>
			</div>
		</div>
		</div>

		<!-- page title -->
		<div class="original notice">
		  <div class="container">
		  	<div class="columns">
		  		<div class="column is-8 is-offset-2">
		  			<transition name="transition">
					  <p class="title is-3 white"><b>{{ product.name }}</b></p>			  				
		  			</transition>		  			
		  		</div>
		  	</div>
		  </div>
		</div>		

		<div class="container">
		  <div class="columns">		
			<div class="column is-8 is-offset-2">
			
			    <div class="loading" v-if="loading">
			      Loading...
			    </div>

					<p class="subtitle"><b>Name & Description</b></p>
					 <p class="subtitle is-5">{{ product.name }}</p>
					
					<div class="columns">
				  	 <div class="column is-9">
						<p class="subtitle"><b>Available Dimensions</b></p>

						  <p>
						  	<span class="subtitle is-5">Spans:</span>
						  	 <a href="">
							  	<span class="tag is-light is-medium" v-for="attribute in attributes">
							  		<b>{{ attribute.span }}</b>
							  	</span>							  	 	
						  	 </a>
						  </p>
						  <p>
						  	<span class="subtitle is-5">Lengths:</span>
						  	<span class="tag is-light is-medium" v-for="attribute in attributes">
						  		<b>{{ attribute.length }}</b>
						  	</span>	
						  </p>										  	 	
				  	 </div>
				  	 <div class="column">
				  	 	=
				  	 </div>
				  	 <div class="column">
				  	 	<p><b>£1,476</b></p>
				  	 </div>
				    </div>

					<p class="subtitle"><b>Specifications</b></p>					    				  
				
					<p class="subtitle"><b>Category / Type</b></p>			

					<p class="subtitle is-5" v-for="category in product.categories">
						{{ category.name }}
					</p>			
												
					<p class="subtitle"><b>Images</b></p>

					<div class="columns">
						<div class="column" v-for="image in product.images">
							<img :src="'/'+image.thumbnail_path" alt="">
						</div>
					</div>
					<p class="subtitle">Front, inside, back, side</p>	
															
			</div>
		  </div>	  	
	    </div>							
	  </div>
</template>

<script>

import Category from '../models/Category';
import Product from '../models/Product';
import Attribute from '../models/Attribute';

export default {

	data() {
		return {
			categories: [],
			product: [],
			loading: false,
			attributes: []
		}
	},
    created(){

		axios.get('/product/'+this.$route.params.id)
			.then(response => {
				this.product = response.data
			});			

        Category.all(categories => this.categories = categories);

        Attribute.all(attributes => this.attributes = attributes);        

    },  
	methods: {
		onSubmit() {
	        this.form
	          .post('/product')
	          .then(
	          	product => this.data === product,
				this.$router.push('catalog')	
	         );
		}	
    }
  }	
</script>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .2s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
      opacity: 0
    }  	
</style>