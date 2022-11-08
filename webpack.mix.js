const mix = require('laravel-mix');

mix
.js('resources/js/admin/admin.js', 'public/js').vue()
.js('resources/js/manager/manager.js', 'public/js').vue()
.js('resources/js/employer/employer.js', 'public/js').vue()
// .js('resources/js/admin/admin.js', 'public/js')
    .postCss('resources/css/admin.css', 'public/css', [
        
    ])
    // .postCss('resources/css/company.css', 'public/css', [
    //     //
    // ])
    // .postCss('resources/css/employer.css', 'public/css', [
        
    // ])
    // .postCss('resources/css/admin.css', 'public/css', [
    //     //
    // ]);
    
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