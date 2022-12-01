import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel([
            "resources/css/app.css",
            "resources/css/home.css",
            "resources/css/about-us.css",
            "resources/css/epci.css",
            "resources/css/esg.css",
            "resources/js/app.js",
            "resources/js/esg.js",
        ]),
    ],
});
