/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ["selector", '[data-mode="dark"]'],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
        extend: {
            spacing: {
                128: "32rem",
                144: "36rem",
            },
            borderRadius: {
                "4xl": "2rem",
            },
            colors: {
                primary: "#1570EF",
                secondary: "#2B3674",
                third: "#A3AED0",
                hover: "#7E3F22",
                dark: "#18181b",
                navy: "#1B2559  ",
                tosca: "rgba(95, 211, 208, 0.15)",
                grey: "#F6F6F6",
                wlp: "F4F7FE",
            },
        },
    },
    plugins: [require("@tailwindcss/forms"), require("flowbite/plugin")],
};
