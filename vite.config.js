import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/move.css',
                'resources/js/app.js',
                'resources/js/move.js',
                'resources/js/progress.js',
                'resources/js/hautPage.js',
                'resources/js/svgMove.js',
                'resources/js/deskSmart.js',
                'resources/js/functionScroll.js',
                'resources/js/reviewStars.js',
                'resources/js/carouselAvis.js',
                'resources/js/reviewFilter.js',
                'resources/js/blurcard.js',
                'resources/js/navChange.js',
            ],
            refresh: true,
        }),
    ],
});
