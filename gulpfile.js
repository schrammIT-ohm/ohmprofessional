var gulp = require('gulp'),
        less = require('gulp-less'),
        sourcemaps = require('gulp-sourcemaps'),
        cleanCSS = require('gulp-clean-css'),
        concat = require('gulp-concat'),
        rename = require('gulp-rename'),
        uglify = require('gulp-uglify'),
        watch = require('gulp-watch'),
        browserSync = require('browser-sync');

/**
 * --- Define path-variables here
 * browserSyncProxy: e.g. "localhost:8888/website" if hosted with mamp
 *
 */
var paths = {
    browserSyncProxy: "http://localhost/wordpress"
};

/**
 *  ---- gulp watch:
 *
 *  - compile Less on changing less files
 *  - reload all browser with browser sync
 */
gulp.task("watch", ["browser-sync", "bs-reload"], function () {

    // -- Compile less files And reload browser-sync everytime we saved a less change
    gulp.watch(["*.css", "style.css"], ["bs-reload"]);

    // -- reload browser-sync everytime we saved a php-file
    gulp.watch(["*.php", "style.css"], ["bs-reload"]);

});
/**
Original mit less-compiler. Entfernt weil's mir sonst die style.css zerschießt.
gulp.task("watch", ["browser-sync", "compileLess", "bs-reload"], function () {

    // -- Compile less files And reload browser-sync everytime we saved a less change
  gulp.watch(["less/**//*.less"], ["compileLess","bs-reload"]);

    // -- reload browser-sync everytime we saved a php-file
    gulp.watch(["*.php", "style.css"], ["bs-reload"]);

});

/**
 * ---- browser-sync ----
 *
 */
gulp.task('browser-sync', function () {
    browserSync({
        proxy: paths.browserSyncProxy,
    });

    //gulp.watch("src/*.css", ['bs-reload']); // reload on change /src/styles.css
});

gulp.task('bs-reload', function () {
    browserSync.reload();
});

/**
 * Compile Less into src/style.css
 *
 * - creates sourcemaps
 */
/**gulp.task('compileLess', function () {
    gulp.src('less/style.less', {base: "less"})
            .pipe(sourcemaps.init())
            .pipe(less())
            //.pipe(cleanCSS()) // uncomment for minify css
            .pipe(sourcemaps.write('less/sourcemaps'))
            .pipe(gulp.dest(''));
});

/**
 * Concat and minify JS
 */
gulp.task('minify', function () {
    return gulp.src([
        'src/js/lib/jquery.min.js',
        'src/js/lib/searchform/classie.js',
        'src/js/lib/searchform/uisearch.js',
        'src/js/lib/jquery.magnific-popup.min.js',
        'src/js/lib/jquery.history.js',
        'src/js/lib/infinite_scroll.js',
        'src/js/main.js'
    ])
            .pipe(concat('concat.js'))
            .pipe(gulp.dest('src/js'))
            .pipe(rename('main.min.js'))
            .pipe(uglify())
            .pipe(gulp.dest('src/js'));
});


/**
 *  --- Default: gulp
 */
gulp.task('default', ['browser-sync'], function () {
    gulp.watch("src/*.css", ['bs-reload']);
});
