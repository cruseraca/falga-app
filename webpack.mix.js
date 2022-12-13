const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/homepage.js", "public/js")
    .js("resources/js/esg.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .sass("resources/sass/app.scss", "public/css")
    .postCss("resources/css/home.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/about-us.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/our-business.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/property.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/epci.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/esg.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/career.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/media-and-information.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .copy(
        "node_modules/@fortawesome/fontawesome-free/webfonts",
        "public/webfonts"
    );

mix.browserSync({
    proxy: "http://127.0.0.1:8000",
});
