@extends('layouts.admin')

@section('content')

<div>
	<div class="container">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<a href="/event.manage">
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
			<p class="title is-3 white"><b>Edit {{ $event->name }}</b></p>		  			
			</div>
		</div>
	</div>
	</div>

	<div class="container">
		<div class="columns">		
			<div class="column is-8 is-offset-2">			

				<!-- editing form -->
				<form action="/update-event/{{ $event->id }}" method="POST" enctype="multipart/form-data">
					
					{{ csrf_field() }}
					{{ method_field('PATCH') }}	

					<p class="subtitle"><b>Title & Description</b></p>
					<div class="field">
						<label>Title:</label>
						<input type="text" class="input" name="title" value="{{ $event->title }}">
					</div>

					<div class="field">
						<label>Brief Description:</label>
						<textarea type="textarea" class="textarea" name="desc">{{ $event->desc }}</textarea>
					</div>

					<p class="subtitle is-5"><b>Cover Image</b></p>						
					<div class="field">
						<label>Image:</label>
						<input type="file" name="cover_image">
					</div>	

					<div class="field is-grouped">
					<p class="control">
						<a href="/event.manage" class="button is-danger">
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
				
				<!-- end of form -->

					<!-- <p class="subtitle"><b>Event Images</b></p>						 -->

					<!-- <div class="columns">
						<div class="column is-one-quarter" v-for="image in product.images">
							<img :src="'/'+image.thumbnail_path" alt="">
						</div>
					</div>		

					<div class="field">
						<button class="button" @click="showUpload = true" v-if="!showUpload">ADD IMAGES</button>
					</div>
					
					<div class="field" v-if="showUpload">
						<a class="is-pulled-right" @click="showUpload = false">
							<i class="fa fa-times fa-2x"></i>
						</a>					
						<dropzone id="productImg" 
								:headers="csrfHeader"
								:url="'/product/'+product.id+'/images'"
								v-on:vdropzone-success="showSuccess"
								:use-font-awesome="true"
								:thumbnail-height="130"
								:thumbnail-width="130">
						</dropzone>											    
					</div>	 -->
					<!-- <p class="subtitle">Front, inside, back, side images</p>	 -->
				
			</div>
		</div>	
	</div>			
</div>

@endsection