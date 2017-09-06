var elixir = require('laravel-elixir');
var gulp = require('gulp');
var config = elixir.config;
var livereload = require('gulp-livereload');
var BrowserSync = require('laravel-elixir-browsersync-official');

elixir(function(mix) {
    BrowserSync.init();
    mix.sass('public/css/sass/app.scss');
    mix.BrowserSync();
});

//
// elixir.extend('livereload', function(src, output) {
//     gulp.task('livereload', function() {
//         livereload.listen();
//         gulp.on('stop', function() {
//             livereload.changed('localhost');
//         });
//     });
//     this.registerWatcher('livereload');
//     return this.queueTask('livereload');
// });
//



