/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Istok Web", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "purple-falga": "#2b4290",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
