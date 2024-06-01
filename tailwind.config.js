/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: '16px',
        },
        extend: {
            colors: {
                primary: '#06b6d4', //Cyan-500
                secondary: '#64748b', //Slate-500
                dark: '#1f2937' //Gray-800
            },
        },
    },
    plugins: [],
}