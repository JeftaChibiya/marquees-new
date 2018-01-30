<!-- Main container -->
<nav class="navbar">
    <div class="navbar-menu" style="background-color: white">
    <!-- Left side -->
    <div class="navbar-start">
        <div class="navbar-item">
            <p>
            <span class="icon is-medium has-text">
                <i class="fa fa-bars fa-2x toggle-button" aria-hidden="true"></i>
            </span>                                
            </p>
        </div>
    </div>

    <!-- Right side -->
    <div class="navbar-end">

        <div class="navbar-item">
            @if(Auth::user())
                <a class="second-toggle">
                    <strong>{{ Auth::user()->name }}</strong>
                </a>                                                               
            @endif 
        </div>

        <div class="navbar-item">
            <a href="{{ url('/logout') }}" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                class="navbar-item">
                Sign out
            </a> 
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form> 
        </div>        

    </div>                                    
</div>
</nav>  
<br/>