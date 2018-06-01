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

mix.webpackConfig
(
    {
        resolve:
            {
                modules:
                    [
                        "node_modules",
                        "resources/assets/js/modules"
                    ]
            }
    }
);

mix
.js('resources/assets/js/order/edit.js', 'public/js/order_edit.js')
.sass('resources/assets/sass/app.scss', 'public/css')
.extract
(
    [
    'bootstrap',
    'popper.js',
    'lodash',
    'jquery',
    'jquery-validation'
    ]
);
