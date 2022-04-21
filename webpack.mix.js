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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();

mix.
sass('resources/sass/app.scss','public/css/app.css').
scripts('resources/js/app.js','public/js/app.js').
scripts('node_modules/jquery/dist/jquery.js','public/js/jquery.js').
scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/js/bootstrap.js').version();