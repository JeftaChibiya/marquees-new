<template>
<div>
	<div class="container">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<router-link to="/attributes">
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
			  <p class="title is-3 white"><b>Add Attribute</b></p>		  			
	  		</div>
	  	</div>
	  </div>
	</div>

	  <div class="container">
		<div class="columns">		
			<div class="column is-4 is-offset-4">			
				<form method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">

					<div class="field is-grouped">
						<div class="field-body">
						  <div class="field">
							<label>Span:</label>
							<input type="text" class="input" v-model="form.span">
						  </div>
						  <div class="field">
							<label>Length:</label>
							<input type="text" class="input" v-model="form.length">
						  </div>							
						</div>
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
		          span: '',
		          length: '',          
		         })
			}
		},

		methods: {
			onSubmit() {
		        this.form
		          .post('/attribute')        
		          .then(attribute => this.data === attribute,

					this.$router.push('attributes')	          	
		         ); 

			}
		},
	    mounted() {
	      
	      // console.log(this.attributes.id)

	    }	
	}	
</script>