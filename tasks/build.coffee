# Require
gulp = require('gulp')
$ = require('gulp-load-plugins')()
path = global.path

# Task
gulp.task 'build', ['sass','script','image','sprite']