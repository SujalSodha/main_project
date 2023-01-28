import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from "path";
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "~bootstrap": path.resolve(
                __dirname,
                "node_modules/bootstrap"
            ),
            "~jquery": path.resolve(
                __dirname,
                "node_modules/jquery/dist/jquery.min.js"
            ),
           // "~font-awesome":path.resolve(__dirname,'resources/assets/admin/vendor/font-awesome/scss/font-awesome.scss')
        },
    },
});
