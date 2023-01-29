for(let i=0; i <24; i++){
    console.log(i.length)
    
}


addEventListener('click',()=>{
    console.log('hello world')
})

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
