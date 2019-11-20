const gulp = require('gulp');
const postcss = require('gulp-postcss');
const rename = require('gulp-rename');

const processor = [
    require('autoprefixer')()
]

gulp.task('css', function(){
    gulp.src('production/css_production/frontend/style_accueil.css')
        .pipe(postcss(processor))
        .pipe(rename('style_accueil_bundle_min.css'))
        .pipe(gulp.dest('css/frontend/'))

    gulp.src('production/css_production/frontend/pages/style_pages.css')
        .pipe(postcss(processor))
        .pipe(rename('style_pages_bundle_min.css'))
        .pipe(gulp.dest('css/frontend/pages/'))
});



gulp.task('watch', function(){
    gulp.watch('production/css_production/frontend/**/*.css', ['css']);
})