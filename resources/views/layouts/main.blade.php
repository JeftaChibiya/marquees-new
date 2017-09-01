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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.6.3/css/justifiedGallery.min.css">              
        <!-- Fonts -->
{{--         <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,500,600" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}        

    </head>
    <body>

        <div id="app">
            @include('partials.navbar')
              @include('partials.quick-info')
            <div>
                @yield('content')
            </div>                       
        </div>    

        @include('partials.footer')

        <script src="{{ mix('js/app.js') }}"></script>
        
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

{{--         <script src="https://cdnjs.cloudflare.com/ajax/libs/justifiedGallery/3.6.3/js/jquery.justifiedGallery.js"></script>

        <script>
            $("#cat_products").justifiedGallery({
                margins: 1,
                rowHeight: 200,
                captions: false               
            });            
        </script> --}}

    </body>
</html>