const mix = require('laravel-mix');
require('laravel-mix-polyfill');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .polyfill({
        enabled: true,
        useBuiltIns: "usage",
        targets: { "firefox": "50", "ie": 11 }
    });;
