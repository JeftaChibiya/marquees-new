@extends('layouts.auth')

@section('content')

    <div class="hero is-large original">
        <div class="hero-body">
            <div class="container">
                <div class="title has-text-centered">
                    <img src="/images/branding/22-login.svg" alt="logo" style="width: 105px; height: auto">
                </div>
                <div class="columns">
                    <div class="column"></div>
                    <div class="column is-3">
                            <p class="subtitle is-5 lato white">Please sign in</p>
                            
                            <form action="{{ route('login') }}" method="POST">
                                {{ csrf_field() }}                                
                                <div class="field">
                                    <input type="text" class="input" name="email" placeholder="Email">
                                </div>
                                <div class="field">
                                    <input type="text" class="input" name="password" placeholder="Password">                            
                                </div>  

                                <div class="field">
                                    
                                </div>  

                                <div class="field is-grouped">
                                    <p class="control">
                                        <button class="button is-success is-rounded" type="submit">Sign in</button>
                                    </p>
                                    <p class="control">
                                        <a class="is-link-success">
                                        Forgot password?
                                        </a>
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
