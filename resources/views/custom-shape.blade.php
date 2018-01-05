@extends('layouts.builder')
@section('title', 'Custom Tent')
@section('content')

<section class="hero is-large">
	<div class="container has-text-centered">
		<img src="/images/tent_types/party_tents.png" alt="">
		<p class="title is-2 has-text-centered">{{ $shape->name }}</p>
		{{-- <img src="/shape.images" alt=""> --}}
	</div>
</section>

<div class="container">
	<div class="container-content">
		<tabs>
			<tab name="Material" :selected="true">
				<div class="column is-8 is-offset-2"> 
                    <div class="field">
                      <div class="control">
                        <label class="checkbox">
                          <input type="checkbox">
								Polyester (PVC)
                        </label>
                       </div>                      
                     </div> 					
				</div>	            
			</tab>

			<tab name="Dimensions">
				<div class="column is-8 is-offset-2">
					
				</div>
			</tab>
			<tab name="Doors">
				<div class="column is-8 is-offset-2">
					6m X 3m
				</div>
			</tab>
			<tab name="Cart">
				<div class="column is-8 is-offset-2">

				</div>
			</tab>						
		</tabs>		
	</div>
</div>

@endsection