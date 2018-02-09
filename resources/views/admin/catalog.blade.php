@extends('layouts.admin')
@section('title', 'Catalog')

@section('content')

<manage-catalog inline-template>
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
                        <a href="/create-product" class="button">
                            <span class="icon">
                            <i class="fa fa-plus-circle"></i>
                            </span> <span>ADD PRODUCT</span>
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
                        <th>Span (m)</th>
                        <th>Length (m)</th>
                        <th>Category / Type</th>	  				      
                        <th>Actions</th>				      
                        </tr>
                    </thead>					  
                    <!-- body -->
                    <tbody v-if="products.length">
                        <tr v-for="product in products">
                        <td>@{{ product.id }}</td>
                        <td>@{{ product.name | capitalize  }}</td>
                        <td>@{{ product.span }}</td>
                        <td>@{{ product.length }}</td>

                        <td v-for="category in product.categories">@{{ category.name }} </td>		

                        <td>
                            <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <span class="icon" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <i class="fa fa-ellipsis-v"></i>
                                </span>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content">                                    
                                    <a tag="a" :href="'/product/'+product.id+'/edit'" class="dropdown-item">
                                        Edit
                                    </a>		
                                <hr class="dropdown-divider">								
                                    <a tag="a" :href="'/product/'+product.id+'/view'" class="dropdown-item">
                                        View
                                    </a>											    					      
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
                        <tr class="subtitle is-5">
                            <b>Loading ...</b>				  		
                        </tr>
                    </tbody>				  
                    </table>				
                </div>
            </div>				
        </div>	        
    </div>
</manage-catalog>

@endsection