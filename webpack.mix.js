const {mix} = require('laravel-mix');

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

mix.sass('resources/assets/sass/app.scss', 'public/css').version();
mix.react('resources/assets/js/index.js', 'public/js/react-panel.js').version();
mix.react('resources/assets/js/public-bridge.js', 'public/js/react-public.js').version();
mix.react('resources/assets/js/modules/project/index.js', 'public/js/react-project.js').version();

mix.disableNotifications();
