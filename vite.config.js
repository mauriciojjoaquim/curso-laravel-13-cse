import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

const path = require('path')

export default {
  root: path.resolve(__dirname, 'src'),
  server: {
    port: 8080,
    hot: true
  }
}
