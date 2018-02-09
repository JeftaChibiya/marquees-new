@extends('layouts.auth')

@section('content')

<div class="hero is-large">
    <div class="hero-body">
        <div class="container">
            <div class="title has-text-centered">
                <img src="/images/branding/22-login.svg" alt="logo" style="width: 105px; height: auto">
            </div>
            <div class="columns">
                <div class="column"></div>
                <div class="column is-one-quarter">
                    
                    <p class="subtitle is-5 lato white"><b>Please verify your identify.</b></p>   

                        <form action="verify-user" method="POST">
                            
                            {{ csrf_field() }}   

                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input type="text" class="input" value="{{ $user->email }}" disabled>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </p>
                            </div>                            
                            <div class="field">
                                <input type="text" class="input" name="reentered-password" placeholder="Password">                            
                            </div>  
                            
                            <br/>

                            <div class="field is-grouped">
                                <p class="control">
                                    <button class="button is-success is-rounded" type="submit">Sign in</button>
                                </p>
                                <p class="control">
                                    <a href="/admin" class="button is-danger is-rounded">Cancel</a>
                                </p>
                            </div>                             
                        </form>
                </div>
                <div class="column"></div>                    
            </div>                
        </div>
    </div>
</div>

@endsection