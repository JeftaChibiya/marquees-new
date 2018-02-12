<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>@yield('title') | ITM Marquees</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Overlock:700!" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.min.css">

        <style>
            .slider_container {
                margin: 0 auto;
                width: 100%
            }   
            .swiper-pagination{
                color: white;
                font-family: "Open Sans",Helvetica,Arial,sans-serif;                
                font-weight: bold;
                font-size: 24px;
                text-align: left;                
            }
            .swiper-pagination-fraction{
                bottom: 58px;
                left: 4%
            }
            .swiper-container {
                width: 100%;
                height: 500px;
                margin: 0 auto;
            }
            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;
                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
            }                     
        </style>
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
                <div id="pjax-container">
                    @yield('content')
                </div> 
            </main>
        </div>    

        @include('partials.footer')

        <script src="{{ mix('js/app.js') }}"></script>      

        <script>
            $('.usp-slider').slick({
                vertical: true,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 300
            });                 
        </script>                

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>
        
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            });
        </script>               

        <script>
            (function($) {
                $('.presentation > .overlay:eq(0)').fadeToggle('slow').next();

                $('.presentation').hover(function(j) {
                    var divContent = $(this).closest('.presentation').find('.overlay');

                    $(this).closest('.presentation').find('.overlay').not(divContent);

                    divContent.stop(false, true).fadeToggle('400');

                    j.preventDefault();
                });
            })(jQuery);            
        </script>
            
        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script> 
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

    </body>
</html>