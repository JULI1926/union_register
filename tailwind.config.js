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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'custom-green': '#39a900',
                'custom-green-hover': '#2e8b00', // Ajusta este color según tus necesidades
                'white-dark': 'white', // Asegura que el fondo blanco se mantenga en modo oscuro
            },
        },
    },

    variants: {
        extend: {
            backgroundColor: ['dark'],
            placeholderColor: ['dark'],
        },
    },

    plugins: [forms],
};