<template>
<div>
	<div class="original notice">
	  <div class="container">
		  <p class="title is-3 white"><b>Categories</b></p>
	  </div>
	</div> 

	<div class="container">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<router-link to="add-category">
						<a href="/" class="button">
							<span class="icon">
							  <i class="fa fa-plus-circle"></i>
							</span> <span>ADD CATEGORY</span>
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
				      <th>Description</th>
				      <th>Actions</th>			      
				    </tr>
				  </thead>
				  <!-- body -->
				  <tbody>	             	
				    <tr v-for="(category, index) in categories">
				      <td>{{ category.id }}</td>
				      <td>{{ category.name | capitalize }}</td>
				      <td>
				      	{{ category.brief_desc }}
				      </td>
					  <td>
						<div class="dropdown is-hoverable">
						  <div class="dropdown-trigger">
						      <span class="icon" aria-haspopup="true" aria-controls="dropdown-menu4">
						      	<i class="fa fa-ellipsis-v"></i>
						      </span>
						  </div>
						  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
						    <div class="dropdown-content">
							<router-link tag="a" :to="'/edit-category/'+category.id+'/edit'" class="dropdown-item">
						        Edit
							</router-link>
							<hr class="dropdown-divider">						      
							<router-link tag="a" :to="'/view-category/'+category.id+'/view'" class="dropdown-item">
						        View
							</router-link>
					        <hr class="dropdown-divider">
						      <a @click="destroy(category)" class="dropdown-item">
						        Delete
						      </a>            
						    </div>
						  </div>
						</div>				      	
				      </td>			      
				    </tr>
				   <!-- <tr><span v-else> No categories yet</span></tr>			     -->
				  </tbody>
				</table>				
			</div>
		</div>			
	   </div>
	</div>

</template>

<script>
  
  import Category from '../models/Category';

  export default{
    data() {
      return {
        categories: [],
        form: new Form        
      }
    },
    created(){
      
        Category.all(categories => this.categories = categories);

    },
    filters: {
        capitalize: function (value) {
          if (!value) return ''
          value = value.toString()
          return value.charAt(0).toUpperCase() + value.slice(1)
        }
    },
    methods: {
	    addCategory(category) {

	        this.categories.push(category);

	    },   
	    destroy(category) {

	        this.form.delete('/category/' + category.id);

	        this.categories.splice(this.categories.indexOf(category), 1); // using splice also applies the transition     
	     }    	
    }
  }
</script>

<!-- CSS for transitions and things -->
<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .2s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
      opacity: 0
    }  
</style>