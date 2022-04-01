const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.styles([
    'resources/assets/css/bootstrap.css',
    'resources/assets/css/style.css',
    'resources/assets/css/memenu.css',
],'public/assets/css/style.css');

mix.scripts([
     'resources/assets/js/jquery-1.11.0.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/responsiveslides.min.js',
    'resources/assets/js/imagezoom.js',
    'resources/assets/js/jquery.flexslider.js',
    'resources/assets/js/simpleCart.min.js',
    'resources/assets/js/memenu.js',
    'resources/assets/js/jquery.easydropdown.js',
],'public/assets/js/scripts.js');

mix.copyDirectory('resources/assets/images','public/assets/images');
mix.copyDirectory('resources/assets/fonts','public/assets/fonts');


