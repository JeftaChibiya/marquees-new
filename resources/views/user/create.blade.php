@extends('layouts.admin')

@section('content')

<create-user inline-template>
    <div>
        <!-- top controls -->
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <a href="/manage-create">
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
                    <div class="column is-4 is-offset-4">
                        <p class="title is-3 white"><b>Create User</b></p>		  			
                    </div>
                </div>
                </div>
            </div>

            <!-- content / purpose -->
            <div class="container">
            <div class="columns">		
                <div class="column is-4 is-offset-4">

                    <form method="POST" action="{{ route('register') }}">
                        
                        {{ csrf_field() }}

                        <div class="field">
                            <label>Full Name:</label>
                            <input type="text" class="input" placeholder="John Doe" name="name">
                        </div>

                        <div class="field">
                            <label>Email:</label>
                            <input type="text" class="input" placeholder="johndoe@mail.com" name="form.email">
                        </div>

                        <div class="field is-grouped">
                            <div class="field-body">
                                <div class="field">
                                <label>Password:</label>
                                <input type="text" class="input" placeholder="*****" name="form.password">
                                </div>
                                <div class="field">
                                <label>Confirm Password:</label>
                                <input type="text" class="input" placeholder="******">
                                </div>							
                            </div>
                        </div>	
                    
                        <div class="field">
                            <button class="button is-light" :disabled="form.errors.any()">
                                SAVE
                            </button>
                        </div>											
                    </form>
                </div>
            </div>		
        </div>        
    </div>
</create-user>
@endsection