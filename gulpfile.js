require('@babel/register')({
    presets: ['@babel/preset-env']
  });
  
  // Rimani con l'import
  import gulp from 'gulp';
  import sass from 'gulp-sass';
  import autoprefixer from 'gulp-autoprefixer';
  import cleanCSS from 'gulp-clean-css';
  
// Task per compilare i file SASS in CSS
export function compileSass() {
    return gulp.src('src/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(gulp.dest('dist/css'));
}

// Task per monitorare i file SASS e avviare la compilazione automatica
export function watchFiles() {
    gulp.watch('src/scss/**/*.scss', compileSass);
}

// Task di default che avvia il monitoraggio dei file SASS
export default watchFiles;
