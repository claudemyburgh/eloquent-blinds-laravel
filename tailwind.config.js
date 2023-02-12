const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */

const customPrimary = {
    50: '#D4EDE1',
    100: '#C5E7D7',
    200: '#A8DBC3',
    300: '#8CCFB0',
    400: '#6FC39C',
    500: '#52B788',
    600: '#3D946B',
    700: '#2D6C4F',
    800: '#1C4432',
    900: '#0C1D15'
}


const fGreen = {
    50: '#D9FFD9',
    100: '#C4FFC4',
    200: '#9BFF9B',
    300: '#73FF73',
    400: '#4AFF4A',
    500: '#21FF21',
    600: '#00E800',
    700: '#00B000',
    800: '#007800',
    900: '#004000'
}

const primary = {
    50: "#99D4F0",
    100: "#87CDED",
    200: "#63BEE8",
    300: "#40AFE3",
    400: "#209FDA",
    500: "#1B85B6",
    600: "#146185",
    700: "#0D3E54",
    800: "#051A23",
    900: "#000000",
}



module.exports = {
    content: [
        './config/support-bubble.php',
        './vendor/spatie/laravel-support-bubble/config/**/*.php',
        './vendor/spatie/laravel-support-bubble/resources/views/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/ts/**/*.{ts,tsx}',
    ],
    darkMode: "class",
    safelist: ['[x-clock]', 'active'],
    theme: {
        extend: {
            fontFamily: {
                serif: ['Roboto', ...defaultTheme.fontFamily.serif],
                title: ['Raleway', ...defaultTheme.fontFamily.serif]
            },
            colors: {
                primary,
                secondary: colors.emerald,
                gray: colors.gray
            },
            width: {
                "square-diagonal": (Math.sqrt(2) * 100).toFixed(2) + "%",
            },
            dropShadow: {
              hard: '2px 2px 0 theme("colors.primary.700")'
            },
            zIndex: {
                100: 100,
                101: 101,
            },
            scale: {
              120: "120%"
            },
            skew: {
                24: '24deg'
            }
        },
    },
    corePlugins: {
        aria: false,
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/line-clamp'),  require('@tailwindcss/typography'), require('tailwindcss-attributes')],
};
