<template>
<div>
<div class="container">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<router-link to="/shapes">
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
			  <p class="title is-3 white"><b>Edit {{ shape.name }}</b></p>		  			
	  		</div>
	  	</div>
	  </div>
	</div>

	<div class="container">
		<div class="columns">		
			<div class="column is-8 is-offset-2">			

			    <!-- editing form -->
				<form method="PATCH" @submit.prevent="onSubmit">

					<p class="subtitle"><b>Name & Description</b></p>

					<div class="field">
						<label>Name:</label>
						<input type="text" class="input" v-model="shape.name">
					</div>
					
					<div class="field">
						<button class="button is-light" type="submit">
							SAVE
						</button>
					</div>											
				</form>		
				
				<!-- end of form -->

					<p class="subtitle"><b>Product Images</b></p>	

					<div class="columns">
						<div class="column is-one-quarter" v-for="image in shape.shapeImages">
							<div class="img-container">
							     <img :src="'/'+image.thumbnail_path" class="image" alt="image.created_at">	
								 <div class="overlay">
								 </div>									
							</div>	

					 	   	 <div class="field">
								<label class="checkbox">
								  <input type="checkbox" name="cover" @click="makeCover(image)">
								  Make Cover
								</label>								 	   	 		
					 	   	 </div>
					 	   	 <div class="field">
								<label class="checkbox">
								  <input type="checkbox">
								  Outside
								</label>								 	   	 		
					 	   	 </div>
					 	   	 <div class="field">
								<label class="checkbox">
								  <input type="checkbox">
								  Inside
								</label>								 	   	 		
					 	   	 </div>					 											     
						</div>
					</div>		

				<div class="field">
					<button class="button" @click="showUpload = true" v-if="!showUpload">		ADD IMAGES
					</button>
				</div>
					
					<div class="field" v-if="showUpload">
				    	<a class="is-pulled-right" @click="showUpload = false">
				    		<i class="fa fa-times fa-2x"></i>
				    	</a>					
					    <dropzone id="productImg" 
					    		  :headers="csrfHeader"
								  :url="'/shape/'+shape.id+'/images'"
					    		  v-on:vdropzone-success="showSuccess"
		  				          :use-font-awesome="true"
		  				          :thumbnail-height="130"
		  				          :thumbnail-width="130">
					    </dropzone>											    
					</div>	
					<p class="subtitle">Front, inside, back, side images</p>	
				
			</div>
		</div>	
	</div>	
</div>			

</template>


<script>

import Shape from '../models/Shape';
import Dropzone from 'vue2-dropzone';

export default {

	components: { Dropzone },

	data() {
		return {
			showUpload: false,
			csrfHeader: null,
			shape: {},
		}
	},	
    created(){
    	// load all shape attributes
		axios.get('/shape/'+this.$route.params.id)
			.then(response => {
				this.shape = response.data;
			});			

        // load the csrf token from the head
        this.csrfHeader = {
        	'X-CSRF-TOKEN': window.Marquees.csrfToken
        }

    },   
	methods: {

	   onSubmit() {
	        axios.patch('/shape/' + this.$route.params.id, {
	        	 name: this.form.name
	        });
		},	

	   makeCover(image){
	   		axios.patch('image/'+image.id, {
	   			cover: image.cover === 1,
				cover: image.cover === 0	   			
	   		})
	   },

       showSuccess: function(file) {
        
         console.log('A file was successfully uploaded')

       }		
	 },
     mounted() {

    	console.log(this.$route.params.id);

     }	    
}	
</script>

<style>

.img-container{
	position: relative;
	width: 100%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.overlay {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  /*background: rgba(0,0,0,0.85);*/
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.img-container:hover .image {
  opacity: 0.3;
}

.img-container:hover .overlay {
  opacity: 1;
}

.textual-content {
  background-color: #4CAF50;
  color: white;
  font-size: 14px;
  padding: 8px 16px;
}
	
</style>