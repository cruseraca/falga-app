import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel([
            "resources/css/app.css",
            "resources/css/home.css",
            "resources/css/about-us.css",
            "resources/css/our-business.css",
            "resources/css/epci.css",
            "resources/css/property.css",
            "resources/css/industrial.css",
            "resources/css/oil-gas.css",
            "resources/css/sustainability.css",
            "resources/js/app.js",
            "resources/js/homepage.js",
            "resources/js/industrial.js",
            "resources/js/sustainability.js",
        ]),
    ],
});
