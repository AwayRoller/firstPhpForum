let mix = require('laravel-mix');

mix
    .setPublicPath('public')
    .disableNotifications()
    .sass('app/resources/sass/main.sass', 'css/main.css')
;
