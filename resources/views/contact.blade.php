@extends('layouts.main')
@section('title', 'Contact Us')
@section('breadcrumbs', Breadcrumbs::render('contact'))

@section('content')
	
	<div class="container">
	<!-- contact marquees  -->
	 <div class="container-content">
		<div class="columns">
			<div class="column is-5">
				<p class="subtitle is-4"><b>Get in touch</b></p> <br/>			
				<b>European Head Office </b><br/>
				Wellington House<br/>
				273-275 High Street<br/>
				London
				AL2 1HA	

			   <ul><br/>
	            <li>  
	              <b>tel:</b>        
	              (+44) 77 79 / 44 25 91              
	            </li>
	            <li>
	              <b>email:</b>             
	              sales@itm-marquees.com              
	            </li><br/>

	            <li>
	              <b>Office hours:</b>             
					Monday to Friday, 8am - 5pm             
	            </li>	            
	          </ul>								
			</div>		

			<div class="column is-5">
				<p class="subtitle is-4"><b>General Enquiries</b></p> <br/>

				<p class="subtitle is-6">Please fill in form below & we'll get back to you</p> <br/>

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

				<div class="field">
					<div class="field">
						<label class="label">First name</label>    
						<p class="control">
							<input class="input is-medium" type="text">
						</p>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label">Email:</label>
							<p class="control">
								<input class="input is-medium" type="tel">
							</p>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label">Subject</label>
							<div class="control">
								<input class="input is-medium" type="text">
							</div>
							<p class="help">

							</p>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<label class="label">Your Message</label>
							<div class="control">
								<textarea class="textarea"></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field">
							<div class="control">
								<button class="button is-black is-medium">
									SEND
								</button>
							</div>
						</div>
					</div>
				</div>					
			</div>			
		</div>	
	</div>		
	</div>

	<!-- <div class="field is-horizontal">
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
		</div> -->
	
@endsection