<template>
	<div>
	<div class="original notice">
	  <div class="container">
		  <p class="title is-3 white"><b>Product Catalog</b></p>
	  </div>
	</div>

	<div class="container">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<router-link to="add-product">
						<a href="/" class="button">
							<span class="icon">
							  <i class="fa fa-plus-circle"></i>
							</span> <span>ADD PRODUCT</span>
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
				      <th>Span (m)</th>
				      <th>Length (m)</th>
  				      <th>Category / Type</th>	  				      
				      <th>Actions</th>				      
				    </tr>
				  </thead>					  
				  <!-- body -->
				  <tbody v-if="products.length">
				    <tr v-for="product in products">
				      <td>{{ product.id }}</td>
				      <td>{{ product.name | capitalize  }}</td>
				      <td>{{ product.span }}</td>
				      <td>{{ product.length }}</td>

				      <td v-for="category in product.categories">{{ category.name }} </td>		

				      <td>
						<div class="dropdown is-hoverable">
						  <div class="dropdown-trigger">
						      <span class="icon" aria-haspopup="true" aria-controls="dropdown-menu4">
						      	<i class="fa fa-ellipsis-v"></i>
						      </span>
						  </div>
						  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
						    <div class="dropdown-content">
								<router-link tag="a" :to="'/edit-product/'+product.id+'/edit'" class="dropdown-item">
							        Edit
								</router-link>		
							<hr class="dropdown-divider">								
								<router-link tag="a" :to="'/view-product/'+product.id+'/view'" class="dropdown-item">
							        View
								</router-link>											    					      
					        <hr class="dropdown-divider">
						      <a @click="destroy(product)" class="dropdown-item">
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
  
    <!--  The Modal -->
	<!--   <modal v-if="showModal" :flip-me="flipMe" @toggle="toggleModal()">
	    <div slot="front-header">
	      <b>Gimme the Keys</b>
	    </div>
	    <div slot="front-body">
	      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quia totam velit amet porro libero ab blanditiis fugiat repudiandae, aperiam, quod ut odit cumque eos modi doloremque laborum delectus commodi!
	    </div>
	    <div slot="front-footer">
	      <button @click="flipModal()"><i class="fa fa-arrow-right"></i></button>
	      <button @click="toggleModal()">Done</button>
	    </div>
	  </modal>  -->

	</div>	
</template>

<script>
 
 import Product from '../models/Product';
 import Modal from '../components/Modal';

 export default{
 	components: {Modal},
    
    data() {
      return {
        products: [],
        form: new Form,
        showModal: false,
        flipMe: false                  
      }
    },  
    created(){
      
        Product.all(products => this.products = products);

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
	    },    	
	    addProduct(product) {

	        this.products.push(product);

	    },   
	    destroy(product) {

	        this.form.delete('/product/' + product.id);

	        this.products.splice(this.products.indexOf(product), 1); // using splice also applies the transition     
	     },
		setData(product) {
	        
	        this.product = product

	    }	         	
    }
  }	
</script>