const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'shark': {
                    '50': '#f4f4f4',
                    '100': '#e9e9e9',
                    '200': '#c9c9c9',
                    '300': '#a8a8a8',
                    '400': '#676767',
                    '500': '#262626',
                    '600': '#222222',
                    '700': '#1d1d1d',
                    '800': '#171717',
                    '900': '#131313'
                }
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
