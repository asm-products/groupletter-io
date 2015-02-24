var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy('bower_components/jquery/dist/jquery.min.js', 'public/js/jquery.js');
    mix.sass('groupletter.scss');
    mix.coffee();
    mix.version(['public/css/groupletter.css','public/js/header-nav.js']);
});
