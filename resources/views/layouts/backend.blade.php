<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <link href="https://fonts.googleapis.com/css?family=Overlock:700!" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/admin.css') }}" rel="stylesheet">

        <script>
            // a global object which contains key needed in our javascript
            window.Marquees = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                ]); ?>
        </script> 
    </head>

    <body>

        <div id="app">   

            {{-- sidemenu --}}
            <nav id="menu" class="slideout-menu original">
                <header>
                    <div class="menu-brand has-text-centered">
                        <a href="/backend">
                            <img src="/images/brand/backend-logo.svg" alt="logo" style="width: auto; height: 145px">                
                        </a>
                    </div>                    
                </header>

            <section class="menu-section">
                <h3 class="menu-section-title"><b>PRODUCTS</b></h3>
                <ul class="menu-section-list">

                    <router-link tag="li" to="/catalog" class="white" exact>
                        <a class="white">Catalog</a>
                    </router-link>  
                    <router-link tag="li" to="/categories" class="white" exact>
                        <a class="white">Categories</a>
                    </router-link>
                    <router-link tag="li" to="/attributes" class="white" exact>
                        <a class="white">Attributes</a>
                    </router-link> 
                    <router-link tag="li" to="/attributes" class="white" exact>
                        <a class="white">Shapes</a>
                    </router-link> 
                </ul>
           </section>

            <section class="menu-section">
                <h3 class="menu-section-title"><b>ORDERS</b></h3>
                <ul class="menu-section-list">
                    <li><a class="white">Custom Orders</a></li>                                    
                </ul>
            </section> 
              
            <section class="menu-section">
                <h3 class="menu-section-title"><b>SETTINGS</b></h3>
                <ul class="menu-section-list">
                    <router-link tag="li" to="/manage-users" class="white" exact>
                        <a class="white">Users</a>
                    </router-link>                 
                </ul>
            </section>                        
            </nav>
            
            {{-- content --}}
            <main id="panel" class="slideout-panel panel">
             <div class="container">
                <!-- Main container -->
                <nav class="level">
                    <!-- Left side -->
                    <div class="level-left">
                        <div class="level-item">
                            <p>
                               <span class="icon is-medium">
                                   <i class="fa fa-bars toggle-button" aria-hidden="true"></i>
                               </span>  MENU                                
                            </p>
                        </div>
                    </div>

                    <!-- Right side -->
                    <div class="level-right">
                        @if(Auth::user())
                        <div class="level-item">
                            <div class="navbar-dropdown is-right is-hoverable">
                                <div class="dropdown-trigger">
                                    <p class="level-item" aria-haspopup="true"  aria-controls="dropdown-menu4">
                                        <strong>{{ Auth::user()->name }}</strong>
                                    </p>    
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            Website
                                        </a>
                                        <hr class="dropdown-divider">                             
                                        <a href="{{ url('/logout') }}" 
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                                        class="dropdown-item">
                                        Logout
                                    </a>   
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>                           
                                </div>
                            </div>
                        </div>                            
                    </div>                          
                    @endif
                </div>                                
            </nav>  
        </div>

        <!-- content -->
        @yield('content')


    </main>                            

</div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
      window.Slideout;

      document.querySelector('.toggle-button').addEventListener('click', function() {
          slideout.toggle();
      });

      function close(event) {
        event.preventDefault();
        slideout.close();
      } 

  // slideout panel - admin
      var slideout = new Slideout({
          'panel': document.getElementById('panel'),
          'menu': document.getElementById('menu'),
          'padding': 230,
          'tolerance': 70
      });

      slideout
        .on('beforeopen', function() {
          this.panel.classList.add('panel-open');
        })
        .on('open', function() {
          this.panel.addEventListener('click', close);
        })
        .on('beforeclose', function() {
          this.panel.classList.remove('panel-open');
          this.panel.removeEventListener('click', close);
      });           
    </script>
    
</body>
</html>