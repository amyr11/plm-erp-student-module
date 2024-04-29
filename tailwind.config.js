import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'blue': { DEFAULT: '#3943B4', 50: '#F9F9FD', 100: '#EAEBF8', 200: '#CBCEEE', 300: '#ACB0E5', 400: '#8D93DB', 500: '#6E76D1', 600: '#4F58C7', 700: '#3943B4', 800: '#2C3389', 900: '#1E235F', 950: '#171B49' },
                'orange': { DEFAULT: '#FB7D5B', 50: '#FFFFFF', 100: '#FFFBFA', 200: '#FEDCD2', 300: '#FDBCAB', 400: '#FC9D83', 500: '#FB7D5B', 600: '#FA5224', 700: '#E03405', 800: '#AA2704', 900: '#731B03', 950: '#571402' },
                'yellow': { DEFAULT: '#FCC43E', 50: '#FFFBF3', 100: '#FEF5DF', 200: '#FEE9B7', 300: '#FDDD8E', 400: '#FDD066', 500: '#FCC43E', 600: '#FBB307', 700: '#C78D03', 800: '#8F6602', 900: '#583F01', 950: '#3D2B01' },
                'grey': { DEFAULT: '#A098AE', 50: '#FFFFFF', 100: '#F4F3F6', 200: '#DFDDE4', 300: '#CAC6D2', 400: '#B5AFC0', 500: '#A098AE', 600: '#837995', 700: '#675E78', 800: '#4C4558', 900: '#312D39', 950: '#242029' },
                'greybg': '#F3F4FF',
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
        require('flowbite-typography'),
    ],
};
