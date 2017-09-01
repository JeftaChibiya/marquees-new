<template>
	<div>
	<div class="original notice">
	  <div class="container">
		  <p class="title is-3 white"><b>User Management</b></p>
	  </div>
	</div>

	<div class="container">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<router-link to="register" tag="p">
						<a class="button">
							<span class="icon">
							  <i class="fa fa-plus-circle"></i>
							</span> <span>ADD USER</span>
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
				      <th>Email</th>
				      <th>Created At</th>
				      <th>Actions</th>				      		      
				    </tr>
				  </thead>
				  <!-- body -->
				  <tbody v-if="users.length">
				    <tr v-for="user in users">
				      <td>{{ user.id }}</td>				    
				      <td>{{ user.name }}</td>
				      <td>{{ user.email }}</td>	
				      <td>{{ user.created_at }}</td>					      			      			      
				      <td>
						<div class="dropdown is-hoverable">
						  <div class="dropdown-trigger">
						      <span class="icon" aria-haspopup="true" aria-controls="dropdown-menu4">
						      	<i class="fa fa-ellipsis-v"></i>
						      </span>
						  </div>
						  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
						    <div class="dropdown-content">
								<router-link tag="a" :to="'/edit-user/'+user.id+'/edit'" class="dropdown-item">
							        Edit
								</router-link>		
							<hr class="dropdown-divider">								
								<router-link tag="a" :to="'/view-user/'+user.id+'/view'" class="dropdown-item">
							        View
								</router-link>											    					      
					        <hr class="dropdown-divider">
						      <a @click="destroy(user)" class="dropdown-item">
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
				    	<b has-text-centered>No users in database!</b>				  		
				  	</tr>
				  </tbody>
				</table>				
			</div>
		</div>				
	</div>	

	</div>	
</template>

<script>
 
 import User from '../models/User';

 export default{
    
    data() {
      return {
          users: []     
      }
    },  
    created(){
      
        User.all(users => this.users = users);

    },
    filters: {
        capitalize: function (value) {
          if (!value) return ''
          value = value.toString()
          return value.charAt(0).toUpperCase() + value.slice(1)
        }
    },
    methods: {
	         	
    }
  }	
</script>