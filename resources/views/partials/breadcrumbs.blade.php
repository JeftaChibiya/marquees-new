@if ($breadcrumbs)
	<ul class="breadcrumb has-succeeds-separator" aria-label="breadcrumbs">
		@foreach ($breadcrumbs as $breadcrumb)
		  		{{-- if a breadcrumb is not the last one, display without any class --}}
			@if ( ! $breadcrumb->last) 
				<li>
					<a href="{{ $breadcrumb->url }}"> {{ $breadcrumb->title }} </a>					
				</li>
			@else	
		  		{{-- else if a breadcrumb is the last one, display with the active class --}}		
				<li>
					<a class="is-active">{{ $breadcrumb->title }}</a>					
				</li> 
			@endif			
		@endforeach  	
	</ul>
@endif