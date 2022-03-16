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


mix.setPublicPath('./')


// Account
mix.js('assets/js/rjb.js', 'assets/js/rjb.min.js')
    .sass('sass/rjb/rjb.scss', 'assets/css/rjb.min.css')
    .options({
        processCssUrls: false,
    });

// Version the files
if (mix.inProduction()) {
    mix.setPublicPath(`./`);
    mix.version([
        'assets/js/rjb.min.js',
        'assets/css/rjb.min.css',
    ]);
}


