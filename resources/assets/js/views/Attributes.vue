<template>
	<div>
	<div class="original notice">
	  <div class="container">
		  <p class="title is-3 white"><b>Attributes (Dimensions and more)</b></p>
	  </div>
	</div>

	<div class="container">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<router-link to="add-attribute">
						<a href="/" class="button">
							<span class="icon">
							  <i class="fa fa-plus-circle"></i>
							</span> <span>ADD ATTRIBUTE</span>
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
				      <th>Span (m)</th>
				      <th>Length (m)</th>  				      
				      <th>Actions</th>				      
				    </tr>
				  </thead>

				  <!-- body -->
				  <tbody v-if="attributes.length">
				    <tr v-for="attribute in attributes">
				      <td>{{ attribute.id }}</td>
				      <td>{{ attribute.span }}</td>
				      <td>{{ attribute.length }}</td>	
				      <td>
						<div class="dropdown is-hoverable">
						  <div class="dropdown-trigger">
						      <span class="icon" aria-haspopup="true" aria-controls="dropdown-menu4">
						      	<i class="fa fa-ellipsis-v"></i>
						      </span>
						  </div>
						  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
						    <div class="dropdown-content">
								<router-link tag="a" :to="'/view-attribute/'+attribute.id+'/view'" class="dropdown-item">
							        View
								</router-link>											    					      
					        <hr class="dropdown-divider">
						      <a @click="destroy(attribute)" class="dropdown-item">
						         Delete
						      </a>            
						    </div>
						  </div>
						</div>				      	
				      </td>					      	      				      			      
				    </tr>
				    <tr>
				  <a href="http://www.practicalecommerce.com/A-Better-Way-to-Store-Ecommerce-Product-Information">
				  	<span class="tag is-info">LINK: </span> Better Way to Store Product Attributes 
				  </a>				    	
				    </tr>
				  </tbody>

				  <tbody v-else>
				  	<tr>
				    	<p class="subtitle is-5">
				    		<b class="has-text-centered">No Attributes in database!</b>
				    	</p>
				    </tr>
				  </tbody>

				</table>				
			</div>
		</div>				
	</div>		
	</div>	
</template>

<script>
 
 import Attribute from '../models/Attribute';

 export default{
    data() {
      return {
        attributes: [],
        form: new Form        
      }
    },    
    created(){
      
        Attribute.all(attributes => this.attributes = attributes);

    },
    filters: {
        capitalize: function (value) {
          if (!value) return ''
          value = value.toString()
          return value.charAt(0).toUpperCase() + value.slice(1)
        }
    },
    methods: {
	    addProduct(attribute) {

	        this.attributes.push(attribute);

	    },   
	    destroy(attribute) {

	        this.form.delete('/attribute/' + attribute.id);

	        this.attributes.splice(this.attributes.indexOf(attribute), 1); // using splice also applies the transition     
	     },
		setData(attribute) {
	        
	        this.attribute = attribute

	    }	         	
    }
  }	
</script>