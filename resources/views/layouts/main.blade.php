<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>@yield('title') | Marquees</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Overlock:700!" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.1/slick/slick.css"/>
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.1/slick/slick-theme.css"/>

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.6.3/css/justifiedGallery.min.css" -->              
        
        <!-- collagePlus -->        
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/collageplus/0.3.3/css/transitions.min.css"> -->

    </head>
    <body>

        <div id="app">          
            <div id="right-side-menu" class="slideout-menu slideout-menu-right">
                <p class="subtitle is-4">MENU</p>
                <ul>
                @foreach($categories as $category)
                    <li>
                        <a class="navbar-item" href="/category/{{ $category->id }}/products">
                            {{ strtoupper($category->name) }}
                        </a>                            
                    </li>
                @endforeach                     
                </ul>
                <br/>
                <p class="subtitle is-5"> <b>Get in touch</b> </p>
                <ul>
                    <li>
                        <a class="navbar-item" href="/contact-us">
                            Contact
                        </a>                        
                    </li>
                    <li>
                        <a class="navbar-item" href="/help">
                            <span class="icon">
                            <i class="fa fa-info-circle"></i>
                            </span> Help
                        </a>                        
                    </li>
                </ul>
            </div>       
            <main id="panel" class="slideout-panel panel">
            @include('partials.navbar')             
                @include('partials.quick-info')
                <div>
                    @yield('content')
                </div> 
            </main>
        </div>    

        @include('partials.footer')

        <script src="{{ mix('js/app.js') }}"></script> 

    <script>
        window.Slideout;

        document.querySelector('.navbar-burger').addEventListener('click', function() {
            slideout.toggle();
        });

        function close(event) {
            event.preventDefault();
            slideout.close();
        } 

        // slideout panel - admin
        var slideout = new Slideout({
            'panel': document.getElementById('panel'),
            'menu': document.getElementById('right-side-menu'),
            'padding': 230,
            'tolerance': 70,
            'side': 'right'
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
        
        <!-- Slick.js -> quick-info div -->        
        <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.7.1/slick/slick.min.js"></script>
        <script>
            $(document).ready(function(){
              $('.usp-slider').slick({
                vertical: true,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 300
              }); 
            });                   
        </script>

    </body>
</html>