# Require
gulp = require('gulp')
$ = require('gulp-load-plugins')()
browserSync = require('browser-sync')
reload = browserSync.reload
path = global.path

# Task
gulp.task 'default', ['build'], ->
    opts =
        notify: false
        open: true
    if path['proxy']
        opts['proxy'] = path.proxy
    else
        opts['server'] = { baseDir: path.server }
    browserSync opts

    gulp.watch path.refresh, reload
    gulp.watch "#{path.img}icons/@2x/*.png", ['sprite']
    gulp.watch "#{path.scss}**/*.scss", ['sass']
    gulp.watch "#{path.js}**/*.js", ['script']