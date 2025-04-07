import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    dark: "#00274D", // Dark Blue for main accents, headers, links
                    vivid: "#0074E4", // Vivid Blue for call-to-action and highlights
                },
                grayscale: {
                    offWhite: "#F5F5F5", // Background for readability
                    light: "#D6D6D6", // Secondary background, cards, borders
                    medium: "#808080", // Navigation, UI elements
                    dark: "#333333", // Text, contrast for readability
                    nearBlack: "#1A1A1A", // Strongest contrast for important elements
                },
            },
        },
    },
    plugins: [],
};
