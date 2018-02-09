@extends('layouts.admin')

@section('content')
    <edit-product :product="{{ $product }}" :categories="{{ $categories }} " inline-template>
        <div>
          <div class="container">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <a href="/manage-catalog">
                            <span class="icon">
                            <i class="fa fa-angle-double-left"></i>
                            </span> <span>Back</span>
                        </a>						
                    </div>
                </div>
            </div>
            </div>

            <!-- page title -->
            <div class="original notice">
            <div class="container">
                <div class="columns">
                    <div class="column is-8 is-offset-2">
                        <transition name="transition">
                        <p class="title is-3 white"><b>@{{ product.name }}</b></p>			  				
                        </transition>		  			
                    </div>
                </div>
            </div>
            </div>		

            <div class="container">
            <div class="columns">		
                <div class="column is-8 is-offset-2">

                        <p class="subtitle"><b>Name & Description</b></p>
                        <p class="subtitle is-5">@{{ product.name }}</p>
                        
                        <div class="columns">
                        <div class="column is-9">
                            <!-- <p>
                                <span class="subtitle is-5">Spans:</span>
                                <a href="">
                                    <span class="tag is-light is-medium" v-for="attribute in attributes">
                                        <b>@{{ attribute.span }}</b>
                                    </span>							  	 	
                                </a>
                            </p> -->
                            <!-- <p>
                                <span class="subtitle is-5">Lengths:</span>
                                <span class="tag is-light is-medium" v-for="attribute in attributes">
                                    <b>@{{ attribute.length }}</b>
                                </span>	
                            </p>										  	 	 -->
                        </div>
                        </div>

                        <p class="subtitle"><b>Specifications</b></p>	
                        <ul>
                            <li>Color: white</li>                            
                            <li>Span: The common span size for these party tent is 6m, 8m, 10m, 15m, 18m, 20m, 25m, 30m, 40m.</li>
                            <li>Length: Extendable by adding further bays.</li>
                            <li>Frame: The main parts of the frame are made of anodised aluminium 
                                alloy whilst smaller metal parts are made of hot-dip galvanized steel.</li>
                            <li>Cover: Roof and sidewall fabric covers are made of 
                                double pvc coated flame retardant polyester textile.</li>
                            <li>Fire Safety: Flame retardant</li>
                            <li>Water Resistance: 100% waterproof</li>
                            <li>Key Features: Easy to assemble and dismantle into a small package. 
                                When the structure is assembled, there are no poles inside, leaving the internal space clear for use.</li>
                        </ul>
                        <br/>
                                                				    				                      
                        <p class="subtitle"><b>Category / Type</b></p>			

                        <p class="subtitle is-5" v-for="category in product.categories">
                            @{{ category.name }}
                        </p>			
                                                    
                        <p class="subtitle"><b>Images</b></p>

                        <div class="columns">
                            @foreach($product_img_links['entries'] as $image)
                                <div class="column is-3">
                                    <img src="{{ $client->getTemporaryLink('/'. $product->id . '/' . $image['name']) }}" style="width: 100%" alt="{{ $image['name'] }}">                                    
                                </div>
                            @endforeach
                        </div>
                        <p class="subtitle">Front, inside, back, side</p>
                </div>
            </div>	  	
            </div>            
        </div>
    </edit-product>
@endsection