/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.{blade.php,vue.js}"],
    theme: {
        extend: {
            screens: {
                xs: { min: "450px", max: "639px" },
            },

            colors: {
                bgGray: "rgba(220, 220, 220, 1)",
                bgGreen: "#5db321",
                bgRed: "#E0115F",
                bgWhite: "#fff",
                bgMehandi: "#1f2937",
                bgYellow: "#de7921",

                shadowMehandi: "#1f29377a",
                buttonMehandi: "#1f2937",

                textGray: "gray",
                textYellow: "#de7921",
                textRed: "#E0115F",
                textMehandi: "#1f2937",
                textGreen: "#5db321",
                textWhite: "white",
                textNotify: "blue",
            },
        },
    },
    plugins: [],
};
