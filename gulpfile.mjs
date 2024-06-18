import gulp from 'gulp';
import gulpSass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import cleanCSS from 'gulp-clean-css';
import { createRequire } from 'module';

// Crea una funzione require per utilizzare in un contesto di modulo ESM
const require = createRequire(import.meta.url);

// Inizializza gulp-sass con il compilatore Sass
const sass = gulpSass(require('sass'));

// Task per compilare Sass
export function compileSass() {
    return gulp.src('wp-content/themes/Depyl-theme/src/sass/theme/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(gulp.dest('dist/css'));
}

// Task per osservare i cambiamenti nei file Sass
export function watchFiles() {
    gulp.watch('wp-content/themes/Depyl-theme/src/sass/theme/*.scss', compileSass);
}

// Task di default che esegue il compilatore Sass e poi inizia a osservare i file
export default function defaultTask() {
    compileSass(); // Esegui compileSass() una volta all'avvio
    watchFiles(); // Avvia watchFiles()
}
