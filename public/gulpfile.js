var gulp = require('gulp');
var _ = console.log;
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var debug = require('gulp-debug');
var jsValidate = require('gulp-jsvalidate');
//var livereload = require('gulp-livereload');

gulp.task('validar_controladores', function () {
    return gulp.src('./js/angular/controladores/*.js')
        .pipe(jsValidate());
});

gulp.task('crear_controladores',['validar_controladores'],function(){
    gulp.src('./js/angular/controladores/*.js')
        .pipe(debug())
        .pipe(concat('ng-controladores.js'))
        .pipe(uglify()).on('error', function (e) {
            _("Ha ocurrido un error \n %s", e.message);
        })
        .pipe(gulp.dest('./js/angular/'))
});

gulp.task('listen_modificaciones',['crear_controladores'],function(){
    gulp.watch('./js/angular/controladores/*.js', ['crear_controladores'], function(e){
        _("archivo %s [%s]",e.type,e.path);
    })
});

/*gulp.task('listen_autoreload', function() {
 livereload.listen();

 gulp.watch('./js/angular/*.js', function(){
 gulp.src('./js/angular/*.js')
 .pipe(livereload());
 });

 });*/