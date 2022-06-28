const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


// // admin setup
// mix.styles([
//     'resources/backend/css/select2.min.css',
//     'resources/backend/css/flatpickr.min.css',
//     'resources/backend/css/sweetalert2.min.css',
//     'resources/backend/css/bootstrap.min.css',
//     'resources/backend/css/icons.min.css',
//     'resources/backend/css/app.css',
//     'resources/backend/css/dataTables.bootstrap4.css',
//     'resources/backend/css/responsive.bootstrap4.css',
//     'resources/backend/css/buttons.bootstrap4.css'
// ], 'public/admin_assets/css/bundled.min.css').options({
//     postCss: [
//         require('postcss-discard-comments')({
//             removeAll: true
//         })
//     ]
// });


// mix.babel([
//     "resources/backend/js/vendor.min.js",
//     "resources/backend/js/parsley.min.js",
//     "resources/backend/js/select2.min.js",
//     "resources/backend/js/sweetalert2.min.js",
//     "resources/backend/js/jquery.form.js",
//     "resources/backend/js/jquery.mask.min.js",
// ], 'public/admin_assets/js/bundled.min.js');


// mix.babel([
//     "resources/backend/datatable/jquery.dataTables.min.js",
//     "resources/backend/datatable/dataTables.bootstrap4.js",
//     "resources/backend/datatable/dataTables.buttons.min.js",
//     "resources/backend/datatable/buttons.bootstrap4.min.js",
//     "resources/backend/datatable/buttons.html5.min.js",
//     "resources/backend/datatable/buttons.flash.min.js",
//     "resources/backend/datatable/buttons.print.min.js",
//     "resources/backend/datatable/dataTables.responsive.min.js",
//     "resources/backend/datatable/responsive.bootstrap4.min.js",
//     // "resources/backend/datatable/pdfmake.min.js",
//     // "resources/backend/datatable/vfs_fonts.js"
// ], 'public/admin_assets/js/dataTable_bundled.min.js');




// front css setup
mix.styles([
    // "resources/assets/front/css/bootstrap.min.css",
	"resources/assets/front/css/fontawesome/all.min.css",
	"resources/assets/front/css/feathericon.min.css",
	"resources/assets/front/css/jquery-ui.css",
	"resources/assets/front/css/select2.min.css",
	"resources/assets/front/css/Navbar.css",
	"resources/assets/front/css/Sidebar.css",
	"resources/assets/front/css/main.css",
	"resources/assets/front/css/style.css",
	"resources/assets/front/css/sweetalert2.min.css",
	"resources/assets/front/css/toastr.min.css",
], 'public/front_assets/css/bundled.min.css').options({
    postCss: [
        require('postcss-discard-comments')({
            removeAll: true
        })
    ]
});

//front js setup
mix.babel([
    // "resources/assets/front/js/jquery-3.2.1.min.js",
	"resources/assets/front/js/jquery-ui.min.js",
	// "resources/assets/front/js/popper.min.js",
	// "resources/assets/front/js/bootstrap.min.js",
	"resources/assets/front/js/jquery.slimscroll.min.js",
	"resources/assets/front/js/select2.full.min.js",
	"resources/assets/front/js/script.js",
	"resources/assets/front/js/jquery.form.js",
	"resources/assets/front/js/parsley.min.js",
	"resources/assets/front/js/sweetalert2.min.js",
	"resources/assets/front/js/toastr.min.js",
], 'public/front_assets/js/bundled.min.js');
