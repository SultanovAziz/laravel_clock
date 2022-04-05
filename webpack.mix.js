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
    'resources/assets/css/flexslider.css'
],'public/assets/css/style.css');

mix.scripts([
    'resources/assets/js/jquery-1.11.0.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery.easydropdown.js',
    'resources/assets/js/imagezoom.js',
    'resources/assets/js/jquery.flexslider.js',
    'resources/assets/js/responsiveslides.min.js',
],'public/assets/js/scripts.js');

mix.copyDirectory('resources/assets/images','public/assets/images');
mix.copyDirectory('resources/assets/fonts','public/assets/fonts');

mix.copy('resources/assets/css/bootstrap.css.map','public/assets/css/bootstrap.css.map');
