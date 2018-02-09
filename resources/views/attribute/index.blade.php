@extends('layouts.admin')
@section('title', 'Product Attributes')

@section('content')

<manage-attributes :attributes="{{ $attributes }}" inline-template>
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
                            <a href="/create-attribute" class="button">
                                <span class="icon">
                                <i class="fa fa-plus-circle"></i>
                                </span> <span>ADD ATTRIBUTE</span>
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
                    <th>Span (m)</th>
                    <th>Length (m)</th>  				      
                    <th>Actions</th>				      
                    </tr>
                </thead>

                <!-- body -->
                <tbody v-if="attributes.length">
                    <tr v-for="attribute in attributes">
                    <td>@{{ attribute.id }}</td>
                    <td>@{{ attribute.span }}</td>
                    <td>@{{ attribute.length }}</td>	
                    <td>
                        <div class="dropdown is-hoverable">
                        <div class="dropdown-trigger">
                            <span class="icon" aria-haspopup="true" aria-controls="dropdown-menu4">
                                <i class="fa fa-ellipsis-v"></i>
                            </span>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                            <div class="dropdown-content">
                                <a :href="'/view-attribute/'+attribute.id+'/view'" class="dropdown-item">
                                    View
                                </a>											    					      
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
                    </tr>
                </tbody>

                <p class="subtitle is-5" v-if="! attributes.length">
                    <b class="has-text-centered">No Attributes in database!</b>
                </p>
                </table>	
                <a href="http://www.practicalecommerce.com/A-Better-Way-to-Store-Ecommerce-Product-Information">
                    <span class="tag is-info">LINK: </span> Better Way to Store Product Attributes 
                </a>                			
            </div>
        </div>				
    </div>		
    </div>
</manage-attributes>
@endsection