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
            <!-- sidemenu  -->
            @include('partials.admin-slideout-menu')   
                <main id="panel" class="slideout-panel panel">
                    <div class="container"> 
                        @include('partials.admin-canvas-menu')                         
                    </div>
                    <!-- content -->
                    @yield('content')                 
                </main>                                    
         </div>   
    
         <!-- admin scripts -->
         @include('partials.admin-scripts')
</body>
</html>