<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>      

        <title>@yield('title') | ITM Marquees</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Overlock:700!" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.min.css">

    </head>
    <body>

        <div id="app">          
            <div id="right-side-menu" class="slideout-menu is-space-grey slideout-menu-right">
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
                        <a class="navbar-item" href="/support"> Support</a>                        
                    </li>
                </ul>
            </div>       
            <main id="panel" class="slideout-panel panel">
            @include('partials.navbar')             
                <div id="pjax-container">
                    @yield('content')
                </div> 
            </main>
        </div>    

        @include('partials.footer')

        <script src="{{ mix('js/app.js') }}"></script>              

        <script src="/js/justifiedgrid/jquery.justifiedGallery.min.js"></script>

        <script>
            $("#mygallery").justifiedGallery({
                lastRow: 'justify',
                rowHeight: 200,
                captions: false,
                imgSelector: '> img',
                selector: 'div:not(.spinner)'
            });        
        </script>

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