@extends('layouts.admin')
@section('title', 'Categories')

@section('content')

<manage-categs inline-template>
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
                        <a href="/create-categ" class="button">
                            <span class="icon">
                            <i class="fa fa-plus-circle"></i>
                            </span> <span>ADD CATEGORY</span>
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
                        <th>Description</th>
                        <th>Actions</th>			      
                        </tr>
                    </thead>
                    <!-- body -->
                    <tbody>	             	
                        <tr v-for="(category, index) in categories">
                        <td>@{{ category.id }}</td>
                        <td>@{{ category.name | capitalize }}</td>
                        <td>
                            @{{ category.brief_desc }}
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
                                <a :href="'/category/'+category.id+'/edit'" class="dropdown-item">
                                    Edit
                                </a>
                                <hr class="dropdown-divider">						      
                                <a :href="'/category/'+category.id+'/view'" class="dropdown-item">
                                    View
                                </a>
                                <hr class="dropdown-divider">
                                <a @click="destroy(category)" class="dropdown-item">
                                    Delete
                                </a>            
                                </div>
                            </div>
                            </div>				      	
                        </td>			      
                        </tr>
                        <tr><span v-else> No categories in the database</span></tr>			    
                    </tbody>
                    </table>				
                </div>
            </div>			
	   </div>            
    </div>
</manage-categs>

@endsection