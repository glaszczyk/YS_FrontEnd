var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function() {
	return gulp.src('./src/AppBundle/Resources/assets/gfx/scss/main.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
	.pipe(rename('main.css'))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest('src/AppBundle/Resources/public/css'));
});

gulp.task("js", function () {
	return gulp.src("./src/AppBundle/Resources/assets/js/main.js")
		.pipe(gulp.dest("./web/bundles/app/js"));
});

gulp.task("default", ["js", "sass"], function(){
	gulp.watch('./src/AppBundle/Resources/assets/gfx/scss/*.scss', ['sass']);
	gulp.watch('./src/AppBundle/Resources/assets/js/*.js', ['js']);
});
