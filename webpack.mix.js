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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .sass('resources/scss/theme.scss', 'public/css/app.css')
    .sass('resources/scss/admin.scss', 'public/css/admin.css')
    .options({
        postCss: [
            require('tailwindcss')
        ],
        processCssUrls: false
    })

mix.browserSync('http://ravsols.test');

mix.disableNotifications();
