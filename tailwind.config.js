/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito Sans", "sans-serif"],
            },
        },
    },
    plugins: [],
};
