const mix = require("laravel-mix");
const fs = require("fs");
const path = require("path");

const image_dir = path.resolve(__dirname, "./resources/img");

const img_reducer = ({ a, d }, c) => {
    const f = path.resolve(d, c);
    if (fs.lstatSync(f).isDirectory()) {
        const fi = fs.readdirSync(f);
        const z = fi.reduce(img_reducer, { a, d: f });
        return { a: z.a, d };
    }
    return {
        a: [
            ...a,
            path.resolve(d, c).replace(/^.*\/resources\/img/, "public/img"),
        ],
        d,
    };
};

const images = fs
    .readdirSync(image_dir)
    .reduce(img_reducer, { a: [], d: image_dir });

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
    .js("resources/js/industrial.js", "public/js")
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
    .postCss("resources/css/oil-gas.css", "public/css", [
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/industrial.css", "public/css", [
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
    )
    .version(images.a);

mix.browserSync({
    proxy: "http://127.0.0.1:8000",
});
