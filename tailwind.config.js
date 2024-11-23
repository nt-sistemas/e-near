import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		 './storage/framework/views/*.php',
		 './resources/**/*.blade.php',
		 './resources/**/*.js',
		 './resources/**/*.vue',
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],
    daisyui: {
        themes: [
            {
                mytheme: {

        "primary": "#04b4fb",

        "secondary": "#2c345c",

        "accent": "#006a00",

        "neutral": "#161423",

        "base-100": "#f9fbff",

        "info": "#0063e6",

        "success": "#008f4a",

        "warning": "#efa200",

        "error": "#ed4859",
                  },
                },
        ],
      },
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
		require("daisyui")
	],
};
