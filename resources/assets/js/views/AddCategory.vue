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
	  		<div class="column is-4 is-offset-4">
			  <p class="title is-3 white"><b>Add Category</b></p>		  			
	  		</div>
	  	</div>
	  </div>
	</div>

	  <div class="container">
		<div class="columns">		
			<div class="column is-4 is-offset-4">			
				<form action="" method="POST" 
					  @submit.prevent="onSubmit" @keydown="form.errors.clear()">

					<div class="field">
						<label>Name:</label>
						<input type="text" class="input" v-model="form.name">
					</div>				
					<div class="field">
						<label>Brief Description:</label>
						<textarea type="textarea" class="textarea" v-model="form.brief_desc">
							
						</textarea>
					</div>					
					<div class="field">
						<button class="button is-light" :disabled="form.errors.any()">
							CREATE
						</button>
					</div>											
				</form>

			</div>
		</div>		
	</div>	
</div>			
</template>

<script>
export default {

	data() {
		return {
	        form: new Form({
	          name: '',
	          brief_desc: '',          
	         })
		}
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