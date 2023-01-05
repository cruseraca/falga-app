const mix = require("laravel-mix");
const fs = require("fs");
const path = require("path");

/**
 * @param {{ a: string[], d: string }} all
 * @param {string} c
 * @returns {{ a: string[], d: string }}
 */
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
            path
                .resolve(d, c)
                .replace(path.resolve(__dirname, "resources"), "public"),
        ],
        d,
    };
};

const img = ["resources/img"].reduce(img_reducer, { a: [], d: __dirname });
const lib = ["resources/lib"].reduce(img_reducer, { a: [], d: __dirname });
const js = ["resources/js"].reduce(img_reducer, { a: [], d: __dirname });
const css = ["resources/css"].reduce(img_reducer, { a: [], d: __dirname });

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

mix.sass("resources/sass/app.scss", "public/css")
    .copy(
        "node_modules/@fortawesome/fontawesome-free/webfonts",
        "public/webfonts"
    )
    .copy("resources/favicon.ico", "public")
    .copy("resources/favicon-16x16.png", "public")
    .copy("resources/favicon-32x32.png", "public")
    .copy("resources/apple-touch-icon.png", "public")
    .copy("resources/android-chrome-512x512.png", "public")
    .copy("resources/android-chrome-192x192.png", "public")
    .copy("resources/site.webmanifest", "public");

const css_plugins = [require("tailwindcss"), require("autoprefixer")];

js.a.forEach((file) => {
    mix.js(file.replace(/^public/, "resources"), file);
});
css.a.forEach((file) => {
    mix.css(file.replace(/^public/, "resources"), file, css_plugins);
});
img.a.forEach((file) => {
    mix.copy(file.replace(/^public/, "resources"), file);
});
lib.a.forEach((file) => {
    mix.copy(file.replace(/^public/, "resources"), file);
    mix.minify(file);
});

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync({
    proxy: "http://127.0.0.1:8000",
});
