const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |.sass('resources/sass/app.scss', 'public/css')
 */
mix.js('resources/js/main.js', 'js/allInOne.js');
/* mix.scripts([
   'resources/js/myFiles/jquery.min.js',
    'resources/js/myFiles/bootstrap.bundle.min.js',
    'resources/js/myFiles/select2.min.js',
    'resources/js/myFiles/sweetalert.min.js',
    'resources/js/myFiles/all.min.js',
    'resources/js/main.js'],
    'public/js/main.min.js');*/
// mix.sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'resources/sass/myFiles/bootstrap.min.css',
    'resources/sass/myFiles/bootstrap-rtl.min.css',
    'resources/sass/myFiles/bootstrap-select.min.css',
    'resources/sass/myFiles/all.min.css',
        // 'resources/sass/myFiles/jquery.dataTables.min.css',
    'resources/sass/app.scss',
],
    'public/css/main.min.css');
