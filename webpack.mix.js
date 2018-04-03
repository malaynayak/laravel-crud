let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


mix.copyDirectory('resources/themes/abstract10/assets/js', 'public/js/');
mix.copyDirectory('resources/themes/abstract10/assets/css', 'public/css/');
mix.copyDirectory('resources/themes/abstract10/assets/images', 'public/images/');
mix.copyDirectory('resources/themes/abstract10/assets/fonts', 'public/fonts/');

