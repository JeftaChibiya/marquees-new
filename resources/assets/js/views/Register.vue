<template>
	<div>
		<!-- top controls -->
		<div class="container">
			<div class="level">
				<div class="level-left">
					<div class="level-item">
						<router-link to="/manage-users">
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
				  <p class="title is-3 white"><b>Create User</b></p>		  			
		  		</div>
		  	</div>
		  </div>
		</div>
		
		<!-- content / purpose -->
	  	  <div class="container">
			<div class="columns">		
				<div class="column is-4 is-offset-4">

					<form method="POST" @submit.prevent="onSubmit" @keydown="form.errors.clear()">

						<div class="field">
							<label>Full Name:</label>
							<input type="text" class="input" placeholder="John Doe" v-model="form.name">
						</div>

						<div class="field">
							<label>Email:</label>
							<input type="text" class="input" placeholder="johndoe@mail.com" v-model="form.email">
						</div>

						<div class="field is-grouped">
							<div class="field-body">
							  <div class="field">
								<label>Password:</label>
								<input type="text" class="input" placeholder="*****" v-model="form.password">
							  </div>
							  <div class="field">
								<label>Confirm Password:</label>
								<input type="text" class="input" placeholder="******">
							  </div>							
							</div>
						</div>	
					
						<div class="field">
							<button class="button is-light" :disabled="form.errors.any()">
								SAVE
							</button>
						</div>											
					</form>
				</div>
			</div>		
		</div>		
	</div>
</template>

<script>

import Category from '../models/Category';
import Dropzone from 'vue2-dropzone';

export default {

	components: { Dropzone },

	data() {
		return {
			categories: [],
			showUpload: false,
			csrfHeader: null,						
	        form: new Form({
	          name: '',
	          email: '',          
	          password: ''
	        })
		}
	},
    created(){
      
        Category.all(categories => this.categories = categories);

        // this.csrfHeader = {
        // 	'X-CSRF-TOKEN': window.Marquees.csrfToken
        // }        

    },
	methods: {
		onSubmit(context) {
	        axios.post('/register-user',
	        	{
	        		name: this.form.name,
	        		email: this.form.email, 
	        		password: this.form.password
	        	}).then(response => {
	        		if(response.status == 200){
	        			context.response = response.data.message
			        	this.$router.push('manage-users')	        			
	        		}	
	        	}, response => {
	        	 	context.response = response.data
	        	 	context.error = true
	        	 }
	         )
		}
	},
    mounted() {
      
      // console.log(this.attributes.id)

    }	
}	
</script>