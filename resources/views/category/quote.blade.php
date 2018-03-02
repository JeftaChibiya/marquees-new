@extends('layouts.main')
@section('title', 'Discover Party, Warehousing designs, and Gazebos & Pagodas')

@section('content')

    <!-- category cover image and title -->     
    <div class="container">
        <div class="margin-top">
            <p class="title is-4"> <b>Request A Quote</b></p>         
        </div>      
    </div>      
    
	 <div class="container">
       <div class="container-content">   
         <div class="has-text-centered">
            <i class="fa fa-calendar-check-o fa-3x is-grey" aria-hidden="true"></i>             
         </div>

         <br/><br/>

          <div class="columns">
            <div class="column is-4 is-offset-4">
                <p class="title is-3 para">Request a callback</p>
                
                <form action="{{ route('quotation-req') }}" method="POST">					
                    
                    {{ csrf_field() }}                    

                    <p class="subtitle is-5">Your contact details</p>
                    
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

                    <label class="label">Contact number & best time to call</label>                                            
					<div class="field is-grouped">
						<p class="control is-expanded">
                            <input class="input {{ $errors->has('phone_number') ? ' is-danger' : '' }}" type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">	                            
                        </p>
                        <p class="control">
                            <div class="select {{ $errors->has('best_time') ? ' is-danger' : '' }}">
                                <select name="best_time">
                                    <option>Select dropdown</option>
                                    <option value="day">All day</option>
                                    <option value="morning">Morning</option>
                                    <option value="midday">Midday</option>
                                    <option value="afternoon">Late Afternoon</option>
                                </select>
                            </div>
                        </p>	                                                
                    </div>
                    <p class="help is-danger">{{ $errors->first('phone_number') }}</p>                     
                    <br/>           

                    <p class="subtitle is-5">Some details about the event</p>
					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">
								<label class="label">Event Date:</label>
								<p class="control">
									<input class="input is-medium {{ $errors->has('event_date') ? ' is-danger' : '' }}" type="text" name="event_date" value="{{ old('event_date') }}">
                                </p>
                                <p class="help is-danger">{{ $errors->first('event_date') }}</p>
							</div>
						</div>
                    </div>

					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">
								<label class="label">Estimated number of guests:</label>
								<p class="control">
									<input class="input is-medium {{ $errors->has('guests_no') ? ' is-danger' : '' }}" type="text" name="guests_no" value="{{ old('guests_no') }}">
                                </p>
                                <p class="help is-danger">{{ $errors->first('guests_no') }}</p>                                
							</div>
						</div>
                    </div>                                      

					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">
								<label class="label">Address of event location</label>
								<div class="control">
									<textarea class="textarea {{ $errors->has('event_location') ? ' is-danger' : '' }}" name="event_location" value="{{ old('event_location') }}"></textarea>
                                </div>
                                <p class="help is-danger">{{ $errors->first('event_location') }}</p>
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
				</form>                			         												    	
            </div>						
            </div>   

            <p class="title is-3 has-text-centered"><b>OR</b></p>
                    
            <p class="title is-5 para has-text-centered">Contact our sales manager</p>       
            
            <div class="columns">
              <div class="column is-4 is-offset-4">
                 <div class="card">
                    <div class="card-content">
                        <div class="level">
                            <div class="level-left">
                                <div class="level-item">
                                    <figure class="image is-96x96px">
                                        <img src="/images/features/featured_imgs/sales_manager.jpg" alt="Placeholder image">
                                    </figure>
                                </div>                            
                                <div class="level-item">
                                    <p class="title is-4">James Burke</p>
                                </div>                                
                            </div>
                         </div>
                         <br/>

                        <div class="content">
                            <div class="content-para">
                                <p class="subtitle is-6">Tel: +44 77 79 / 44 25 91</p>
                                <!-- <p class="subtitle is-6">Fax: +44 17 27 / 74 73 51</p> -->
                                <p class="subtitle is-6">Skype: +44 14 42 / 78 08 05</p>
                                <p class="subtitle is-6">Email: sales@itm-marquees.com</p>
                                <p class="subtitle is-6">Mon - Fri: 8am - 5pm</p>                                          
                            </div> 
                        </div>
                    </div>
                </div>                    
            </div>
          </div>

          <br/><br/>

        <div class="columns">
          <a href="/service-steps" class="column is-8">
             <div class="bg-cover" style="background-image: url('/images/features/featured_imgs/party_tent.jpg')">
                <div class="overlay center-all">                  
                  <p class="title is-2 white">Step 1 to 6 of how we serve you</p>                              
                </div>           
            </div> 
          </a>
                    
          <div class="column">  
            <div class="bg_request bg-cover">
              <div class="overlay center-all">                  
                <p class="subtitle is-5">
                  <a href="/category/{{ $category->id }}/request">
                    <button class="button is-success">Request a quote</button>
                  </a>
                </p>                              
              </div>           
            </div>              
          </div>
        </div>
          
       </div>          
    </div>
  
@endsection