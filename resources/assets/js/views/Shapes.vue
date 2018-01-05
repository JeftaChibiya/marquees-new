<template>
  <div>
	<div class="original notice">
	  <div class="container">
		  <p class="title is-3 white"><b>Shapes</b></p>
	  </div>
	</div>

	<div class="container">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<router-link to="add-shape">
						<a class="button">
							<span class="icon">
							  <i class="fa fa-plus-circle"></i>
							</span> <span>ADD SHAPE</span>
						</a>						
					</router-link>
				</div>
			</div>
		</div>
		<div class="columns">		
			<div class="column is-10">
				<table class="table is-bordered">
					<!-- header -->
				  <thead>
				    <tr>
				      <th>ID</th>
				      <th>Name</th>  				      
				      <th>Actions</th>				      
				    </tr>
				  </thead>					  
				  <!-- body -->
				  <tbody v-if="shapes.length">
				    <tr v-for="shape in shapes">
				      <td>{{ shape.id }}</td>
				      <td>{{ shape.name | capitalize  }}</td>
	

				      <td>
						<div class="dropdown is-hoverable">
						  <div class="dropdown-trigger">
						      <span class="icon" aria-haspopup="true" aria-controls="dropdown-menu4">
						      	<i class="fa fa-ellipsis-v"></i>
						      </span>
						  </div>
						  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
						    <div class="dropdown-content">
								<router-link tag="a" :to="'/edit-shape/'+shape.id+'/edit'" class="dropdown-item">
							        Edit
								</router-link>		
							<hr class="dropdown-divider">								
								<router-link tag="a" :to="'/view-shape/'+shape.id+'/view'" class="dropdown-item">
							        View
								</router-link>											    					      
					        <hr class="dropdown-divider">
						      <a @click="destroy(shape)" class="dropdown-item">
						        Delete
						      </a>            
						    </div>
						  </div>
						</div>				      	
				      </td>				      			      				      			      
				    </tr>
				  </tbody>
				  <tbody v-else>
				  	<tr class="subtitle is-5 ">
				    	<b has-text-centered>Loading ...</b>				  		
				  	</tr>
				  </tbody>				  
				</table>				
			</div>
		</div>				
	</div>	
  </div>	
</template>

<script>
 
 import Shape from '../models/Shape';
 import Modal from '../components/Modal';

 export default{
 	components: {Modal},
    
    data() {
      return {
        shapes: [],
        form: new Form,
        showModal: false,
        flipMe: false                  
      }
    },  
    created(){
      
        Shape.all(shapes => this.shapes = shapes);

    },
    filters: {
        capitalize: function (value) {
          if (!value) return ''
          value = value.toString()
          return value.charAt(0).toUpperCase() + value.slice(1)
        }
    },
    methods: {
	    toggleModal: function() {
	        this.showModal = !this.showModal
	    },
	    flipModal: function() {
	        this.flipMe = !this.flipMe
	    }   	
	    // addProduct(product) {

	    //     this.products.push(product);

	    // },   
	 //    destroy(product) {

	 //        this.form.delete('/product/' + product.id);

	 //        this.products.splice(this.products.indexOf(product), 1); // using splice also applies the transition     
	 //     },
		// setData(product) {
	        
	 //        this.product = product

	 //    }	         	
    }
  }	
</script>