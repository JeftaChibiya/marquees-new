@extends('layouts.auth')

@section('content')

    <div class="hero is-large">
        <div class="hero-body">
            <div class="container">
                <div class="title has-text-centered">
                    <img src="/images/brand/backend-logo.svg" alt="logo" style="width: auto; height: 175px">
                </div>
                <div class="columns">
                    <div class="column"></div>
                    <div class="column is-one-quarter">
                            <form action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}                                
                                <div class="field">
                                    <label>Email:</label>
                                    <input type="text" class="input" name="email" placeholder="johndoe@mail.com">
                                </div>
                                <div class="field">
                                    <label>Password:</label>
                                    <input type="text" class="input" name="password" placeholder="******">                            
                                </div>  
                                <div class="field">
                                    <button class="button is-success is-medium" type="submit">SIGN IN</button>
                                </div>                  
                            </form>
                    </div>
                    <div class="column"></div>                    
                </div>                
            </div>
        </div>
    </div>                          

@endsection
