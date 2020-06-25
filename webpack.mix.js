const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
    });

    // .styles([
    //
    //     'resources/asset/frontend/css/bootstrap.css',
    //     'resources/asset/frontend/css/custom.css',
    //     'resources/asset/frontend/css/style.css',
    //     'resources/asset/frontend/font-awesome-4.0.3/font-awesome.min.css',
    //
    // ], 'public/css/front.css');
