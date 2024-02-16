import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { createVuePlugin } from 'vite-plugin-vue2';

export default defineConfig({
    plugins: [
        laravel(['resources/css/app.scss', 'resources/js/app.js']),
        createVuePlugin(),
    ],
});
