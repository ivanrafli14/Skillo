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
            keyframes: {
                slideUp: {
                    "0%": { transform: "translateY(20px)", opacity: "0" },
                    "100%": { transform: "translateY(0)", opacity: "1" },
                },
                fadeOutRight: {
                    "0%": { transform: "translateX(-20px)", opacity: "0" },
                    "100%": { transform: "translateX(0px)", opacity: "1" },
                },
            },
            animation: {
                slideUp: "slideUp 1s ease-out",
                fadeOutRight: "fadeOutRight 1s ease-out",
            },
            colors: {
                primary: "#3498db",
                secondary: "#2c3e50", //text-primary
                accent: "#2980b9", //hover
                neutral: "#34495e", //text-second-default all
                third: "#f5f7fa", //bg-secondary
                line: "#e0e0e0",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                custom: "0px 0.2px 12px 0px rgba(36, 50, 66, 0.08)",
            },
            filter: {
                primary:
                    "invert(68%) sepia(97%) saturate(3149%) hue-rotate(177deg) brightness(89%) contrast(93%)",
                secondary:
                    "invert(100%) sepia(40%) saturate(406%) hue-rotate(191deg) brightness(111%) contrast(96%)",
            },
        },
    },
    plugins: [require("tailwindcss-filters")],
};
