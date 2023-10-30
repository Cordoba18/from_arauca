import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/form.css',
                'resources/css/show.css',
                'resources/css/participants.css',
                'resources/css/tyc.css',
                //-------------------------------------------------------------------------------
                'resources/js/participants.js',
                'resources/js/home.js',
                'resources/js/tyc.js',
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
