@extends('layouts.main')
@section('title', 'Contact Us')
@section('breadcrumbs', Breadcrumbs::render('contact'))

@section('content')
	
	<div class="container">
	{{-- contact marquees --}}
	 <div class="container-content">
		<div class="columns">
			<div class="column"></div>
			<div class="column is-5 notification">
				<p class="subtitle is-3 has-text-centered h"><b>Contact Marquees</b></p>

				<div class="field">
					<div class="control">
						<label class="label">Select Title:</label>
						<label class="radio">
							<input type="radio" name="question">
							Mr
						</label>
						<label class="radio">
							<input type="radio" name="question">
							Mrs
						</label>
						<label class="radio">
							<input type="radio" name="question">
							Miss
						</label>
						<label class="radio">
							<input type="radio" name="question">
							Ms
						</label>												
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label">First name</label>    
							<p class="control">
								<input class="input" type="text" placeholder="firstname">
							</p>
						</div>
						<div class="field">
							<label class="label">Lastname</label>  
							<p class="control is-expanded">
								<input class="input" type="email" placeholder="Lastname">
							</p>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label">Email:</label>
							<p class="control">
								<input class="input" type="tel" placeholder="yourname@mail.com">
							</p>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="fields">
						<div class="control">
							<label class="label">Telephone:</label>				   	
						</div>
						<p class="help">Do not enter the first zero</p>
					</div>
				</div>			

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<p class="control">
								<p class="select is-fullwidth">
									<select name="country_code">
										<option value="+44 GB/UK">+44 GB/UK</option>
									</select>				         	
								</p>
							</p>
						</div>
						<div class="field is-expanded">
							<p class="control">
								<input class="input" type="tel" placeholder="Your phone number">
							</p>
						</div>			         	
					</div>	
				</div>


				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label">Subject</label>
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Partnership opportunity">
							</div>
							<p class="help">

							</p>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label">Comment</label>
							<div class="control">
								<textarea class="textarea" placeholder="I would like to tell you about ..."></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<div class="control">
								<button class="button is-dark is-medium">
									Send message
								</button>
							</div>
						</div>
					</div>
				</div>					
			</div>
			<div class="column">
				<b>European Head Office</b><br/>
				ITM Marquees Ltd.<br/>
				Wellington House<br/>
				273-275 High Street<br/>
				London
				AL2 1HA				
			</div>
		</div>				
	</div>		

	<div class="columns">
		<p class="has-text-centered">By Phone</p>
		<div class="column"></div>
		<div class="columns is-6">
			  <ul>
			    <li>
					<b>Open... 8am - 5pm</b>			    	
			    </li>
	            <li>
	              <span class="icon">
	                <i class="fa fa-home"></i>
	              </span>            
	              (+44) 77 79 / 44 25 91              
	            </li>
	            <li>
	            	+44 17 27 / 74 73 51
	            </li>
	            <li>
	            	+44 14 42 / 78 08 05
	            </li>
	            <li>
	              <span class="icon">
	                <i class="fa fa-envelope"></i>
	              </span>              
	              sales@itm-marquees.com              
	            </li>	            
	          </ul>			
		</div>
		<div class="column"></div>
	</div>
	</div>
	
@endsection