@extends('layouts.admin')

@section('content')

<create-categ inline-template>
	<div>
		<div class="container">
			<div class="columns">
				<div class="column">
					<a href="/manage-categories">
						<span class="icon">
						<i class="fa fa-angle-double-left"></i>
						</span> <span>Back</span>
					</a>						
				</div>
			</div>
		</div>
		<br/>

		<!-- page title -->
		<div class="original notice">
		<div class="container">
			<div class="columns">
				<div class="column is-4 is-offset-4">
				<p class="title is-3 white"><b>New Category</b></p>		  			
				</div>
			</div>
		</div>
		</div>

		<div class="container">
			<div class="columns">		
				<div class="column is-4 is-offset-4">							
					<form action="/category" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<p class="subtitle is-5"><b>Name & Description</b></p>
						<div class="field">
							<label>Name:</label>
							<input type="text" class="input" name="name">
						</div>				
						<div class="field">
							<label>Brief Description:</label>
							<textarea type="textarea" class="textarea" name="brief_desc"></textarea>
						</div>		

						<p class="subtitle is-5"><b>Cover Image</b></p>						
						<div class="field">
							<label>Image:</label>
							<input type="file" name="cover_image">
						</div>								
						<div class="field">
							<button class="button is-light" type="submit">
								CREATE
							</button>
						</div>											
					</form>
				</div>
			</div>		
		</div>	
	</div>    
</create-categ>

@endsection