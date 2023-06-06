import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/js/app.js',
                    'resources/js/color-modes.js',
                    'resources/css/bootstrap.min.css',
                    'resources/css/products.css'],
            refresh: true,
        }),
    ],
});
