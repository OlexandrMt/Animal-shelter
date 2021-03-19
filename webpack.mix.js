const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.postCss('resources/css/styles.css', 'public/css', [
		 require('postcss-import'),
		 require('tailwindcss'),
		 require('autoprefixer'),
	])
	.postCss('resources/css/authPage.css', 'public/css', [
		 require('postcss-import'),
		 require('tailwindcss'),
		 require('autoprefixer'),
	])
	.options({
		processCssUrls: false
	})
	.copyDirectory("resources/webfonts", "public/webfonts")
	.copyDirectory("node_modules/bootstrap-icons/font/fonts", "public/css/fonts");
	
	
