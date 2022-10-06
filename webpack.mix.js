const mix = require('laravel-mix');

mix
// .js('resources/js/app/app.js', 'public/js')
.js('resources/js/admin/admin.js', 'public/js').vue()
    // .postCss('resources/css/app.css', 'public/css', [
        //
    // ])
    .postCss('resources/css/admin.css', 'public/css', [
        //
    ]);
    
    module.exports = {
        //...
        devServer: {
          proxy: {
            '/admin': { 
            target: 'http://localhost:8000',
            changeOrigin: true 
        }
          },
        },
      };