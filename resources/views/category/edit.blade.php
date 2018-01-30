@extends('layouts.admin')

@section('content')

<edit-categ :category="{{ $category }}" inline-template>
<div>
	  <div class="container">
			<div class="level">
				<div class="level-left">
					<div class="level-item">
                        <a href="/manage-categories">
                            <span class="icon">
                            <i class="fa fa-angle-left"></i>
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
						<div class="column is-4 is-offset-4">
							<p class="title white">Edit @{{ category.name }} </p>	  			
						</div>
					</div>
				</div>
			</div>

		  <div class="container">
			<div class="columns">		
				<div class="column is-4 is-offset-4">

					<p class="subtitle is-5"><b>Name & Description</b></p>

					<form action="/update-category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        
						<div class="field">
							<label>Name:</label>
							<input type="text" class="input" name="name" value="{{ $category->name }}">
						</div>								

						<div class="field">
							<label>Brief Description:</label>
							<textarea type="textarea" class="textarea" name="brief_desc">{{ $category->brief_desc }}</textarea>
						</div>

						<p class="subtitle is-5"><b>Cover Image</b></p>						
						<div class="field">
							<label>Image:</label>
							<input type="file" name="cover_image">
						</div>	

                        <div class="field is-grouped">
                        <p class="control">
							<a href="/manage-categories" class="button is-danger">
                                CANCEL
							</a>                        
                        </p>
                        <p class="control">
							<button class="button is-light" type="submit">
								UPDATE
							</button>
                        </p>
                        </div>											
					</form>				
				</div>
			</div>			
		</div>				
	</div>
</edit-categ>
@endsection