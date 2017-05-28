const elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(mix => {
    mix.sass('front.scss')
    .webpack('front.js');
});