var elixir = require('laravel-elixir');
var packages = {
    jquery: 'node_modules/jquery/dist/',
    bootstrap: 'node_modules/bootstrap/dist/',
    font_awesome: 'node_modules/font-awesome/',
    resources: 'resources/assets/'
};

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix

        .copy(packages.bootstrap + 'fonts', 'public/fonts')
        .copy(packages.bootstrap + 'css/bootstrap.min.css', 'public/css/bootstrap.min.css')
        .copy(packages.bootstrap + 'js/bootstrap.min.js', 'public/js/bootstrap.min.js')
        .copy(packages.jquery + 'jquery.min.js', 'public/js/jquery.min.js')
        .copy(packages.font_awesome + 'fonts', 'public/fonts')
        .copy(packages.font_awesome + 'css/font-awesome.min.css', 'public/css/font-awesome.min.css')
        .less(['theme.less','terminal.less'], 'public/css/app.min.css')
        .coffee(['Calculator.coffee', 'home.coffee'], 'public/js/home.min.js')
});
