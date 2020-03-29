const mix = require("laravel-mix");
require("laravel-mix-polyfill");
require("laravel-mix-purgecss");
const tailwindcss = require("tailwindcss");

mix.js("resources/js/app.js", "public/js")
    .version()
    .autoload({
        vue: ["Vue", "window.Vue"]
    })
    .sass("resources/sass/app.scss", "public/css")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")]
    })
    .purgeCss()
    .polyfill({
        enabled: true,
        useBuiltIns: "usage",
        targets: { firefox: "50", ie: 11 }
    });
