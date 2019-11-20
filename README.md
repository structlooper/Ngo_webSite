# CharityStr_git.io
<h1>To install this laravel project</h1>
<h3>You have to follow the following steps</h3>
<h4> go to the folder where you want to colne the project.</h4>
--> open terminal and write "git clone https://github.com/strlpr/CharityStr_git.io.git"<br>
<br>
-->now install composer by cmd "composer install"<br>
<br>
-->now copy .env file by cmd "copy .env.example .env"<br>
and open .env file and check database setting<br>
{<br>
    DB_CONNECTION=mysql<br>
    DB_HOST=127.0.0.1<br>
    DB_PORT=3306<br>
    DB_DATABASE=laravel //write database name<br>
    DB_USERNAME=root //user name of your database<br>
    DB_PASSWORD=   //DB_PASSWORD if configured otherwise leave it<br>
}<br>
<br>
-->after this you have to genrate the application key by cmd <br>
"php artisan key:generate"<br>
// it will generate application key set successfully<br>
-->now you have take the DUMP data sql file from this which is Dump20191119 (1).sql and <br> import it inside your mysql databse.
<br>
-->now migrate the database with project cmd "php artisan migrate"

-->now to run development server write cmd "php artisan serve"<br>
it will generate localhost -> http://127.0.0.1:8000/ on this you can view<br>
