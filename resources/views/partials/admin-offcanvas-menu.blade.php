<nav id="admin" class="slideout-menu original">
    <header>
        <div class="menu-brand has-text-centered">
            <a href="/admin">
                <img src="/images/branding/19.svg" alt="logo" style="width: 94px; height: auto">                
            </a>
        </div>                    
    </header>

    <section class="menu-section">
        <h3 class="menu-section-title"><b>{{ ucfirst(Auth::user()->name) }}</b></h3>
        <ul class="menu-section-list">                    
            <hr class="navbar-divider">                            
            <li>
                <a href="/" class="white navbar-item" target="_blank">
                    Go to Website
                </a>
            </li>
            <li>
                <a href="{{ url('/logout') }}" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                    class="navbar-item">
                    Sign out
                </a> 
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>                  
            </li>
                                 
        </ul>
    </section>
                       
</nav>