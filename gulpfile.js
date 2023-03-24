'use strict';

const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const browser_sync = require('browser-sync').create();

const sass_paths = [
    ' '
];

const js_paths = [
    'assets/scripts/js/vendor/jquery.js',
    'assets/scripts/js/vendor/plugins.js',
    'assets/scripts/js/vendor/theme.js',
    'assets/scripts/js/app.js'
];

//compile scss into css
function styles() {
    //1. where is my scss file
    return src('./assets/styles/scss/app.scss')
        .pipe(sourcemaps.init({loadMaps: true}))
        //2. pass that file through sass compiler
        .pipe(sass({
            includePaths: sass_paths,
            outputStyle: 'compressed' // if css compressed **file size**
        }).on('error', sass.logError))
        //2.5 minify compiled sass
        .pipe(postcss([cssnano(),
            autoprefixer()
        ]))
        .pipe(sourcemaps.write('.', {addComment: true}))
        //3. send the compiled css to a folder
        .pipe(dest('./assets/styles/css'))
        //4. stream changes to all browsers
        .pipe(browser_sync.stream());
}

//javascript task
function scripts() {
    //1. path to my js file(s)
    return src(js_paths)
        .pipe(sourcemaps.init({loadMaps: true}))
        //2. concat all js files
        .pipe(concat('scripts.js'))
        //3. minify the js file
        .pipe(uglify())
        .pipe(sourcemaps.write('.', {addComment: true}))
        //4. send the minified js file to location
        .pipe(dest('assets/scripts/'))
}

//browser-sync function
function browser_server(reloaded) {
    browser_sync.init({
        server: {
            baseDir:"./"
        }
    });
    reloaded();
}

//reload function for browser-sync
function browser_reload(reloaded) {
    browser_sync.reload();
    reloaded();
}

//watch function
function browser_watch() {
    watch('*.html', browser_reload);
    watch('*.php', browser_reload);
    watch(['assets/styles/scss/**/*.scss', 'assets/scripts/js/**/*.js'], series(styles, scripts, browser_reload));
}

//default gulp task
exports.default = series(
    styles,
    scripts,
    browser_server,
    browser_watch
);