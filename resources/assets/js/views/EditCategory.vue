<template>
	<div>
		<p class="title">Edit {{ category.name }} </p>
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<router-link to="/categories">
						<a>
							<span class="icon">
							<i class="fa fa-angle-left"></i>
							</span> <span>Back</span>
						</a>						
					</router-link>
				</div>
			</div>
		</div>

		<div class="columns">		
			<div class="column is-4 is-offset-4">

				<p class="subtitle is-5"><b>Name & Description</b></p>

				<form action="" method="POST" 
					  @submit.prevent="onSubmit" @keydown="form.errors.clear()">

					<div class="field">
						<label>Name:</label>
						<input type="text" class="input" v-model="form.name" value="category.name">
					</div>								

					<div class="field">
						<label>Description:</label>
						<input type="text" class="input" v-model="form.name" value="category.name">
					</div>	

					<div class="field">
						<button class="button is-light" :disabled="form.errors.any()">
							CREATE
						</button>
					</div>											
				</form>

				<p class="subtitle is-5"><b>Products in Category / Type</b></p>					

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