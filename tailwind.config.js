import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: '#538234',
                secondary: '#242424',
                'background-light': '#ffffff',
                'background-dark': '#101922',
                neutral: {
                    100: '#e5e5e5',
                    200: '#ced4da',
                    300: '#adb5bd',
                    400: '#868e96',
                    500: '#6c757d',
                    600: '#495057',
                    700: '#343a40',
                    800: '#343a40',
                    900: '#212529',
                },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                display: ['Inter', 'sans-serif'],
                body: ['Inter', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};
