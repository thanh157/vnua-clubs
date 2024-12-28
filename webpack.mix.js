// filepath: /E:/laragon/www/vnua-clubs/webpack.mix.js
const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sourceMaps();

mix.webpackConfig({
    plugins: [
        new BrowserSyncPlugin({
            proxy: 'localhost:8000', // Địa chỉ của server Laravel
            files: [
                'app/**/*',
                'resources/views/**/*',
                'routes/**/*',
                'public/**/*'
            ],
            notify: false
        })
    ]
});