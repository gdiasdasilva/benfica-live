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

mix.copyDirectory('node_modules/font-awesome/fonts', 'public/fonts');

mix.js('resources/assets/js/app.js', 'public/js').extract(['vue']);

mix.standaloneSass('resources/assets/sass/app.scss', 'public/css');

if (mix.inProduction) {
    mix.version();
}

mix.browserSync({
    proxy: 'benfica-live.test'
});
