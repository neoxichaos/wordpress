// Requis
var gulp = require('gulp');
// var css = require('gulp-mini-css');
var sass = require('gulp-sass');
var csscomb = require('gulp-csscomb');
var cssbeaut = require('gulp-cssbeautify');
var autoprefix = require('gulp-autoprefixer');

// Include plugins
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json

// Variables de chemins
var source = './src'; // dossier de travail
var destination = './assets'; // dossier à livrer
var racine = './';

// Tache pour 
gulp.task('css-scss', () => {
    return gulp.src(source + '/assets/css/style.scss')
        .pipe(sass())
        .pipe(csscomb())
        .pipe(cssbeaut())
        .pipe(autoprefix())
        .pipe(gulp.dest(racine));
});

gulp.task('scss', function() {
    gulp.watch(source + '/assets/css/*.scss', ['css-scss'])
});

gulp.watch('minify-css', function() {
    gulp.src(destination + '/assets/css/style.css')
        .pipe(css({ ext: '-min.css' }))
        .pipe(gulp.dest(destination + '/assets/css/'));
});

// Tâche "build"
gulp.task('build', ['css']);

// Tâche "prod" = Build + minify
gulp.task('prod', ['build', 'minify-css']);