const mix = require('laravel-mix');

mix
.js('resources/js/app/app.js', 'public/js')
.js('resources/js/company/company.js', 'public/js')
.js('resources/js/employer/employer.js', 'public/js')
.js('resources/js/admin/admin.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
        
    ])
    .postCss('resources/css/company.css', 'public/css', [
        //
    ])
    .postCss('resources/css/employer.css', 'public/css', [
        
    ])
    .postCss('resources/css/admin.css', 'public/css', [
        //
    ]);
    
    // module.exports = {
    //     //...
    //     devServer: {
    //       proxy: {
    //         '/admin': { 
    //         target: 'http://localhost:8000',
    //         changeOrigin: true 
    //     }
    //       },
    //     },
    //   };