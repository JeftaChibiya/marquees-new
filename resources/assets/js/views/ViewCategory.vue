<template>
	<div>

		<div class="container">
			<div class="level">
				<div class="level-left">
					<div class="level-item">
						<router-link to="/categories">
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
					  <p class="title is-3 white"><b>{{ category.name }}</b></p>			  				
		  			</transition>		  			
		  		</div>
		  	</div>
		  </div>
		</div>			

		<div class="container">
			<div class="columns">		
			<div class="column is-8 is-offset-2">

				<p class="subtitle is-5"><b>Name & Description</b></p>

				 <p class="subtitle is-5">{{ category.name }}, <i>{{ category.brief_desc }}</i> </p>						

				<p class="subtitle is-5"><b>Products in Category / Type</b></p>					

				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Span</th>
							<th>Length</th>							
						</tr>
					</thead>
					<tbody>
						<tr v-for="product in category.products">
							<td>{{ product.id }} </td>
							<td>{{ product.name }}</td>
							<td>{{ product.span }}</td>
							<td>{{ product.length }}</td>							
						</tr>
					</tbody>
				</table>
			</div>
		 </div>					
		</div>		
	</div>
</template>

<script>

import Category from '../models/Category';

export default {

	data() {
		return {
			category: {},
	        form: new Form({
	          name: '',
	          span: '',          
	          length: ''
	         })
		}
	},
	created(){

		axios.get('/category/'+this.$route.params.id)
			.then(response => {
				this.category = response.data;
			})				
	},
	methods: {
		onSubmit() {
	        this.form
	          .post('/category')        
	          .then(category => this.data === category,

				this.$router.push('categories')	          	
	         ); 

		}
	},
    mounted() {
      
      // console.log(this.attributes.id)

    }	
}	
</script>