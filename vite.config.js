import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/bootstrap.min.css',
                'resources/css/bookber.css',
                'resources/css/owl.css',
                'resources/css/animate.css',
                'resources/css/css-login-register/login-register.css', 
                'resources/js/bookber.js',
                'resources/js/bootstrap.min.js',
                'resources/js/jquery.min.js',
                'resources/js/custom.js',
                'resources/js/js-login-register/counter.js',
                'resources/js/js-login-register/isotope.min.js',
                'resources/js/js-login-register/jquery.min.js',
                'resources/js/js-login-register/login-register.js'
            ],
            refresh: true,
        }),
    ],
});
