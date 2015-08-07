var elixir = require('laravel-elixir');\
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

/*
 * Note: Not recommending unit tests running via gulp.
 * We are using custom settings and sqlite for unit testing.
 */
elixir(function(mix) {
    mix.sass('app.scss');
});