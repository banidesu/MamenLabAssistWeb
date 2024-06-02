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
            fontFamily: {
                sans: ['Poppins', 'sans-serif'],
                // Tambahkan font lainnya jika diperlukan
            },
            colors: {
                primary: '#a855f7', //Purple-500
                secondary: '#d8b4fe', //Purple-300
                dark: '#1f2937' //Gray-800
            },
        },
    },
    plugins: [],
}