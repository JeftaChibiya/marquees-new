@extends('layouts.main')
@section('title', 'Build your Tent')
@section('breadcrumbs', Breadcrumbs::render('help'))

@section('content')
	
<div class="container">	
	<div class="container-content">
		<p class="title is-3"> Top 5 FAQs</p>		
			<div class="tile is-ancestor">
				<div class="tile is-vertical is-8">
					<div class="tile">
						<div class="tile is-parent is-vertical">
							<article class="tile is-child">

							 <div class="level">
								<!-- Left side -->
								<div class="level-left">
									<div class="level-item">
										<span class="count-number center-all"> 1</span>
									</div>
									<div class="center-vertically level-item">
										<span class="is_lato">What is Poly/PVC Material?</span>										
									</div>
								</div>
							   </div>
								<p class="content-para">
									Polyester/PVC material is a high quality, 
									fabric cloth with PVC coating on the inside, 
									which makes the material water and fire resistant.									
								</p>
							</article>
							<article class="tile is-child">
								<div class="level">
									<div class="level-left">
										<div class="level-item">
											<span class="count-number center-all"> 2</span>
										</div>
										<div class="level-item">
											<span class="is_lato overflow-wrap">What's the difference between PE <br/> and Poly/PVC material?</span>										
										</div>
									</div>
							     </div>
								<p class="content-para">
									Poly/PVC is luxurious material with 
									a life expectancy double that of PE material.
									To achieve this level of quality, 
									Poly/PVC is requires much more resources to manufacture than PE.									
								</p>
							</article>
						</div>
						<div class="tile is-parent">
							<article class="tile is-child">
								<div class="level">
									<div class="level-left">
										<div class="level-item">
											<span class="count-number center-all"> 3</span>
										</div>
										<div class="center-vertically level-item">
											<span class="is_lato">What does Multi-Span mean?</span>										
										</div>
									</div>
							     </div>								
								<p class="content-para">
									Multi-Span means you can add an extra 3m or 5m bay to increase the size of your marquee or structure. 
									For example, if you have a 6m x 3m, tent you can purchase a 3m bay, 
									which increases the size of your tent to a 6m x 6m marquee.
									For a 15m x 30m marquee, you can purchase additional 5m bay, 
									extending your tent into a 15m x 35m marquee.									
								</p>
							</article>
						</div>
					</div>
					<div class="tile is-parent">
						<article class="tile is-child">
							<div class="level">
								<div class="level-left">
									<div class="level-item">
										<span class="count-number center-all"> 4</span>
									</div>
									<div class="center-vertically level-item">
										<span class="is_lato">How many guests can I accommodate in a tent?</span>										
									</div>
								</div>
							</div>								
							<div class="content">
								<p class="content-para">
								 This depends on the type of event you are holding and number of guests. 
								 Also taken into consideration is whether guests are seated or standing, as well as space for dance floors, 
								 stages, reception areas as needed. A general rule of thumb is a minimum of 0.7sq.m (8 sq ft) per person for a standing event, and 1.4sq.m (15 sq ft) per person if seated. 
								 Our advisors can inform you of the suitable tent size based on your specified requirements.
								</p>
							</div>
						</article>
					</div>
				</div>
				<div class="tile is-parent is-vertical">
					<article class="tile is-child">
						<div class="level">
							<div class="level-left">
								<div class="level-item">
									<span class="count-number center-all"> 5</span>
								</div>
								<div class="center-vertically level-item">
									<span class="is_lato">How do I know if my site is suitable <br/> for installing a marquee?</span>										
								</div>
							</div>
						</div>						
						<div class="content">
							<p class="content-para">
								Most surfaces are suitable for installing a marquee. 
								We typically use pegs driven into natural ground to support a marquee.  
								However, surfaces where marquees cannot be pegged into the ground (i.e. paving, concrete or asphalt) steel or concrete weights can be used.								
							</p>
						</div>
					</article>
					<article class="tile is-child notification is-light">
						<div class="content has-text-centered">
							<p class="is_lato pad_title">Want to find out more?</p>
							<p><a href="/contact-us" class="button is-link"><b>CONTACT US</a></p>
						</div>
					</article>					
				</div>
			</div>			
	</div>
</div>
	
@endsection