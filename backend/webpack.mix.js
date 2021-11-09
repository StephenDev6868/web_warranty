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
    .js('resources/js/home.js', 'public/js')
    .js('resources/js/my-program.js', 'public/js')
    .js('resources/js/divided.js', 'public/js')
    .js('resources/js/header.js', 'public/js')
    .js('resources/js/popup.js', 'public/js')
    .js('resources/js/register-program-step-2.js', 'public/js')
    .js('resources/js/register-program.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.sass('resources/sass/home.scss', 'public/css', {})
    .sass('resources/sass/about.scss', 'public/css', {})
    .sass('resources/sass/assurances.scss', 'public/css', {})
    .sass('resources/sass/devide-user.scss', 'public/css', {})
    .sass('resources/sass/divided-detail.scss', 'public/css', {})
    .sass('resources/sass/divided_full.scss', 'public/css', {})
    .sass('resources/sass/divided.scss', 'public/css', {})
    .sass('resources/sass/history-compensation-0.scss', 'public/css', {})
    .sass('resources/sass/history-compensation-1.scss', 'public/css', {})
    .sass('resources/sass/history-compensation-2.scss', 'public/css', {})
    .sass('resources/sass/history-compensation-3.scss', 'public/css', {})
    .sass('resources/sass/my-program.scss', 'public/css', {})
    .sass('resources/sass/my-wallet-trade-history.scss', 'public/css', {})
    .sass('resources/sass/my-wallet.scss', 'public/css', {})
    .sass('resources/sass/register-program.scss', 'public/css', {})
    .sass('resources/sass/register-program-step-2.scss', 'public/css', {})
    .sass('resources/sass/register-program-step-3.scss', 'public/css', {})
    .sass('resources/sass/register-receive.scss', 'public/css', {})
    .sass('resources/sass/support.scss', 'public/css', {});


