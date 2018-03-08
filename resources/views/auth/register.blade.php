@extends('layouts.auth')

@section('content')

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
        
    <br/>

    <!-- page title -->
    <div class="original notice">
        <div class="container">
            <div class="columns">
                <div class="column is-4 is-offset-4">
                    <p class="title is-3 white"><b>New User</b></p>		  			
                </div>
            </div>
        </div>
    </div>    

    <div class="container">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="field {{ $errors->has('name') ? ' is-danger' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="field {{ $errors->has('email') ? ' is-danger' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="field {{ $errors->has('password') ? ' is-danger' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="input" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="field ">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="field ">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
