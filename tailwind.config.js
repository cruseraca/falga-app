/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Istok Web", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                "purple-falga": "#2b4290",
                "red-falga": "#972540",
                "violet-falga": "rgba(105, 43, 105, 0.85)",
            },
            backgroundImage: {
                "hero-image": "url('/img/hero-image-1.jpg')",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
        require("flowbite/plugin"),
    ],
};
