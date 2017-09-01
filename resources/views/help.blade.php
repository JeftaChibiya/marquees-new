@extends('layouts.main')
@section('title', 'Build your Tent')
@section('breadcrumbs', Breadcrumbs::render('help'))

@section('content')
	
	<div class="container">
		<div class="container-content">
			<div class="columns">
				<div class="column is-4 is-offset-4">
					<div class="field has-addons">
					  <div class="control has-icons-left">
					    <input class="input is-medium" type="text" placeholder="Ask a question">
					    <span class="icon is-left">
					      <i class="fa fa-search"></i>
					    </span>					    
					  </div>
					  <div class="control">
					    <a class="button is-success is-medium">
					      SEARCH
					    </a>
					  </div>
					</div>					
				</div>
			</div>
		</div> <br/>

		<div class="notification brand-color column is-6 is-offset-3">
			<p class="subtitle is-4"><b>Top 10 FAQs!</b></p>
			 <div class="content">
				<ol>
					<li class="subtitle is-5">What is Poly/PVC Material?</li>
					<li class="subtitle is-5">What is the difference between PE and Poly/PVC material?</li>
					<li class="subtitle is-5">What does Multi-Span mean?</li>
					<li class="subtitle is-5">Please give me your price list</li>
					<li class="subtitle is-5">Is it easy to set up the tent?</li>
					<li class="subtitle is-5">How many guests can I accommodate in a tent?</li>
					<li class="subtitle is-5">May I set up the tent at any size I like?</li>
					<li class="subtitle is-5">How will I fix the tent to the ground?</li>
					<li class="subtitle is-5">What size marquee will I need?</li>
					<li class="subtitle is-5">How do I know if my site is suitable for installing a marquee?</li>
				</ol>			 	
			 </div>
		</div>
	</div>
	
@endsection