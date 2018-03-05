@extends('layouts.main')
@section('title', 'Contact Us')
@section('breadcrumbs', Breadcrumbs::render('contact.create'))

@section('content')
	
	<div class="container">
	<!-- contact marquees  -->
	 <div class="container-content">
		<div class="columns">
			<div class="column is-5">
				<p class="subtitle is-4"><b>Get in touch</b></p>	
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
				<p class="subtitle is-4"><b>General Enquiries</b></p>

				<p class="subtitle is-6">Please fill in form below & we'll get back to you</p>

				<form action="{{ route('send') }}" method="POST">
					
					{{ csrf_field() }}

					<div class="field">
						<div class="field">
							<label class="label">Full name</label>    
							<p class="control">
								<input class="input is-medium {{ $errors->has('full_name') ? ' is-danger' : '' }}" type="text" name="full_name" value="{{ old('full_name') }}">
							</p>
							<p class="help is-danger">{{ $errors->first('full_name') }}</p>						
						</div>
					</div>

					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">
								<label class="label">Email:</label>
								<p class="control">
									<input class="input is-medium {{ $errors->has('email') ? ' is-danger' : '' }}" type="text" name="email" value="{{ old('email') }}">
								</p>
								<p class="help is-danger">{{ $errors->first('email') }}</p>									
							</div>
						</div>
					</div>

					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">
								<label class="label">Your Message</label>
								<div class="control">
									<textarea class="textarea {{ $errors->has('msg') ? ' is-danger' : '' }}" name="msg">{{ old('msg') }}</textarea>
								</div>
								<p class="help is-danger">{{ $errors->first('msg') }}</p>									
							</div>
						</div>
					</div>

					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">
								<div class="control">
									<button class="button is-black is-medium" type="submit">
										SEND
									</button>
								</div>
							</div>
						</div>
					</div>	
					
					@if(count($errors))
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
									<p class="is-red">
										One or more fields are missing. Please try again
									</p>
                                </div>
                            </div>
                        </div>
					@endif
						
				</form>					
			</div>			
		</div>	
	</div>		
	</div>
	<br/>
	
@endsection