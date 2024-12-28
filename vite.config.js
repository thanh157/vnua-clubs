import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import liveReload from 'vite-plugin-live-reload';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        liveReload([
            'app/**/*',
            'resources/views/**/*',
            'routes/**/*',
            'public/**/*'
        ])
    ],
    server: {
        proxy: {
            '/': 'http://127.0.0.1:8000'
        }
    }
});
