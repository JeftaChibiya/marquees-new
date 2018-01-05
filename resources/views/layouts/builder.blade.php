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

        <style>
            .styled-group {
              display: inline-block;
              vertical-align: top;
              background: #fff;
              text-align: left;
              box-shadow: 0 1px 2px rgba(0,0,0,0.1);
              padding: 30px;
              width: 200px;
              height: 210px;
              margin: 10px;
            }        
            .styled {
              display: block;
              position: relative;
              padding-left: 30px;
              margin-bottom: 15px;
              cursor: pointer;
              font-size: 16px;
            }
            .styled input {
              position: absolute;
              z-index: -1;
              opacity: 0;
            }
            .styled__indicator {
              position: absolute;
              top: 2px;
              left: 0;
              height: 20px;
              width: 20px;
              background: #e6e6e6;
            }
            .styled--radio .styled__indicator {
              border-radius: 50%;
            }
            .styled:hover input ~ .styled__indicator,
            .styled input:focus ~ .styled__indicator {
              background: #ccc;
            }
            .styled input:checked ~ .styled__indicator {
              background: #2aa1c0;
            }
            .styled:hover input:not([disabled]):checked ~ .styled__indicator,
            .styled input:checked:focus ~ .styled__indicator {
              background: #0e647d;
            }
            .styled input:disabled ~ .styled__indicator {
              background: #e6e6e6;
              opacity: 0.6;
              pointer-events: none;
            }
            .styled__indicator:after {
              content: '';
              position: absolute;
              display: none;
            }
            .styled input:checked ~ .styled__indicator:after {
              display: block;
            }
            .styled--checkbox .styled__indicator:after {
              left: 8px;
              top: 4px;
              width: 3px;
              height: 8px;
              border: solid #fff;
              border-width: 0 2px 2px 0;
              transform: rotate(45deg);
            }
            .styled--checkbox input:disabled ~ .styled__indicator:after {
              border-color: #7b7b7b;
            }
            .styled--radio .styled__indicator:after {
              left: 7px;
              top: 7px;
              height: 6px;
              width: 6px;
              border-radius: 50%;
              background: #fff;
            }
            .styled--radio input:disabled ~ .styled__indicator:after {
              background: #7b7b7b;
            }
            .select {
              position: relative;
              display: inline-block;
              margin-bottom: 15px;
              width: 100%;
            }
            .select select {
              display: inline-block;
              width: 100%;
              cursor: pointer;
              padding: 10px 15px;
              outline: 0;
              border: 0;
              border-radius: 0;
              background: #e6e6e6;
              color: #7b7b7b;
              appearance: none;
              -webkit-appearance: none;
              -moz-appearance: none;
            }
            .select select::-ms-expand {
              display: none;
            }
            .select select:hover,
            .select select:focus {
              color: #000;
              background: #ccc;
            }
            .select select:disabled {
              opacity: 0.5;
              pointer-events: none;
            }
            .select__arrow {
              position: absolute;
              top: 16px;
              right: 15px;
              width: 0;
              height: 0;
              pointer-events: none;
              border-style: solid;
              border-width: 8px 5px 0 5px;
              border-color: #7b7b7b transparent transparent transparent;
            }
            .select select:hover ~ .select__arrow,
            .select select:focus ~ .select__arrow {
              border-top-color: #000;
            }
            .select select:disabled ~ .select__arrow {
              border-top-color: #ccc;
            }         
        </style>        
      </head>
    <body>

        <div id="app">
            @include('partials.bd-navbar')
            <div>
                @yield('content')
            </div>                       
        </div>    

        @include('partials.bd-footer')

        <script src="{{ mix('js/app.js') }}"></script>
        
        <!-- photoset-grikd js -->        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/photoset-grid/1.0.1/jquery.photoset-grid.min.js">
        </script>        

    </body>
</html>