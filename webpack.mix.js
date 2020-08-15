const mix = require('laravel-mix');


mix.styles(
    [
        "resources/assets/css/bootstrap.min.css",              
        "resources/assets/css/animate.css",
        "resources/assets/css/style.css",
    ],
    "public/css/app.css"
);

mix.scripts(
    [
        "resources/assets/js/jquery-3.1.1.min.js",
        "resources/assets/js/popper.min.js",
        "resources/assets/js/bootstrap.js",
        "resources/assets/js/plugins/metisMenu/jquery.metisMenu.js",
        "resources/assets/js/plugins/slimscroll/jquery.slimscroll.min.js",
        "resources/assets/js/inspinia.js",
    ],
    "public/js/app.js"
);
