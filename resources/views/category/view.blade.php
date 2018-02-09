@extends('layouts.admin')

@section('content')

<view-categ :category="{{ $category }}" inline-template>
	<div>
		<div class="container">
			<div class="level">
				<div class="level-left">
						<a href="/manage-categories">
							<span class="icon">
							<i class="fa fa-angle-double-left"></i>
							</span> <span>Back</span>
						</a>						
					</div>
				</div>
		</div>			


		<!-- page title -->
		<div class="original notice">
		  <div class="container">
		  	<div class="columns">
		  		<div class="column is-8 is-offset-2">
		  			<transition name="transition">
					  <p class="title is-3 white"><b>@{{ category.name }}</b></p>			  				
		  			</transition>		  			
		  		</div>
		  	</div>
		  </div>
		</div>			

		<div class="container">
			<div class="columns">		
			<div class="column is-8 is-offset-2">

				<p class="subtitle is-5"><b>Name & Description</b></p>

				<div class="column is-4">
					<img src="/uploads/cover_images/categs/{{ $category->cover_image }}" alt="{{ $category->name }}">				
				</div>

				 <p class="subtitle is-5">@{{ category.name }}, <i>@{{ category.brief_desc }}</i> </p>						

				<p class="subtitle is-5"><b>Products in Category / Type</b></p>					

				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Span</th>
							<th>Length</th>							
						</tr>
					</thead>
					<tbody>
						<tr v-for="product in category.products">
							<td>@{{ product.id }} </td>
							<td>@{{ product.name }}</td>
							<td>@{{ product.span }}</td>
							<td>@{{ product.length }}</td>							
						</tr>
					</tbody>
				</table>
			</div>
		 </div>					
		</div>		
	</div>
</view-categ>

@endsection