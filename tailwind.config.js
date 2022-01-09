const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'poppins': ['Poppins', 'sans-serif'],
                // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'xx': '.65rem',
            },
            colors: {
                gr:{
                    'light': '#AEC15D',
                    'medium': '#85AA35',
                    'dark': '#4B7312',
                    'whi': '#000000',
                },
                ye:{
                    'light': '#E8C16F',
                    'medium': '#E3AD46',
                    'golden': '#F2B705',
                },
                bro:{
                    'dark': '#8C4E03',
                    'medium': '#DA8E04',
                    'darker': '#583001',
                },
                whi:{
                    'yellow': '#F1E3B6',
                    'opaque': '#F0E5D5',
                },
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
