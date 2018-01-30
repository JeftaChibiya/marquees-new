@extends('layouts.admin')

@section('content')

<manage-users inline-template>
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
					<a href="/create-user" class="button">
							<span class="icon">
							  <i class="fa fa-plus-circle"></i>
							</span> <span>ADD USER</span>						
					</a>
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
				      <th>Role</th>
				      <th>Actions</th>				      		      
				    </tr>
				  </thead>
				  <!-- body -->
				  <tbody>
				    <tr v-for="user in users" v-if="users.length">
				      <td>@{{ user.id }}</td>				    
				      <td>@{{ user.name }}</td>
				      <td>@{{ user.email }}</td>	
				      <td>@{{ user.created_at }}</td>					      			      			      
				      <td>
						<div class="dropdown is-hoverable">
						  <div class="dropdown-trigger">
						      <span class="icon" aria-haspopup="true" aria-controls="dropdown-menu4">
						      	<i class="fa fa-ellipsis-v"></i>
						      </span>
						  </div>
						  <div class="dropdown-menu" id="dropdown-menu4" role="menu">
						    <div class="dropdown-content">
									<a :href="'/assign-role/'+user.id" class="dropdown-item">
												Assign Role
									</a>		
										<hr class="dropdown-divider">								
						      <a @click="destroy(user)" class="dropdown-item">
						        Remove
						      </a>            
						    </div>
						  </div>
						</div>				      	
				      </td>				      				      			      
				    </tr>
				  	<tr class="subtitle is-5" v-else>
				    	<b has-text-centered>No users in database!</b>				  		
				  	</tr>						
				  </tbody>
				</table>				
			</div>
		</div>				
	</div>	

	</div>
</manage-users>

@endsection