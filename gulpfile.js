const { src, dest, watch }      = require('gulp');
const sass                      = require('gulp-sass');
const minifyCSS                 = require('gulp-csso');
const babel                     = require('gulp-babel');
const concat                    = require('gulp-concat');
const sassGlob                  = require('gulp-sass-glob');
const terser                    = require('gulp-terser');
const autoprefixer              = require('autoprefixer');
const postcss                   = require('gulp-postcss');
const browserSync               = require('browser-sync').create();

// Compile SASS

function css() {
    return src('./scss/**/*.scss')
        .pipe(sassGlob())
        .pipe(sass())
        .pipe(postcss([ autoprefixer() ]))
        .pipe(minifyCSS())
        .pipe(dest('./css/'))
        .pipe(browserSync.stream());
};

// Compile libraries
function libraries() {

    //JS Libraries
    const files = [
        './js/libraries/lazysizes.js'
    ];

    return src(files)
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat( 'library.js' ))
        .pipe(terser())
        .pipe(dest('./js/'));

};

// Compile Scripts

function js() {
    return src('./js/src/*.js')
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('scripts.js'))
        .pipe(terser())
        .pipe(dest('./js/'));
};

// Browser Sync

function browser() {
    browserSync.init({
        proxy: 'http://jessspaude.working',
        reloadOnRestart: true,
    });

    watch('./scss/**/*.scss', css);
    watch('./js/libraries/*.js', libraries);
    watch('./js/src/*.js', js);
    watch(['**/**/*.php', '**/**/*.html']).on('change', browserSync.reload);
}

exports.css = css;
exports.libraries = libraries;
exports.js = js;
exports.default = browser;