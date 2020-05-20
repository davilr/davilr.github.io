var gulp    = require("gulp");
var sass    = require("gulp-sass");
var plumber = require("gulp-plumber");

var sassFiles = "./scss/**/*.scss";

gulp.task("sass", function() {
    return gulp.src(sassFiles)
            .pipe(plumber())
            .pipe(sass())
            .pipe(plumber.stop())
            .pipe(gulp.dest("./css"))
    ;
});

gulp.task("default", ["sass"], function() {
    gulp.watch(sassFiles, ["sass"]);
});