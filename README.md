# README #

Website for advertising agancy in Ostrava, Czech republic




Usage on windows with XAMPP


### windows configuration ###
* C:/Windows/System32/drivers/etc/
* edit hosts
* add line 127.0.0.1 bobas.dev

### apache configuration ###
* C:/xampp/apache/conf/extra
* edit httpd-vhosts.conf
* Add
	<VirtualHost *:80>
		DocumentRoot "C:/xampp/htdocs/www/{Project-folder}/public"
		ServerName {Project URL}
	</VirtualHost>


### Project installation ###
* navigate to {Project-folder} via cmd
* run command npm install -g gulp-cli
* and then run npm install


### Used technologies ###
* laravel-elixir (https://laravel.com/docs/5.3/elixir)
* webpack
* sass


### Commands ####
* gulp - run all tasks from gulpfile
* gulp watch - watching for file changes SCSS and JS and compiling the to CSS and JS (EC6)
	- css is compiled from /resources/assets/sass/front.scss to /public/css/front.css
	- js is comliped from /resources/assets/js/front.js to /public/js/front.js
* gulp watch --production 
	- Makes the same as watch, but is minifying css and js