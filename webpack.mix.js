let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/admin.scss', 'public/css')
   .sass('resources/assets/sass/auth.scss', 'public/css')   
   .copy('node_modules/font-awesome/fonts/*', 'public/fonts')
   .version()
   .browserSync('marquees.app');   
