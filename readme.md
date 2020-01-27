*How to use*

1. Move the project directory to your web server's root dir (C:/xampp/htdocs for example), open up .env file and change the database settings(db name, username, pwd) to a database you want to use OR create a databaase called "itoma" with root user's password being empty.
2. Open up a terminal on the project folder and run these commands : composer install ; npm install (to compile node modules) ; php artisan migrate (to generate database with its tables) ; php artisan db:seed (to fill the tables with pre-written data)
3. If needed, you can run php artisan migrate:fresh to wipe out the database and use php artisan db:seed again to create duplicates of same data.


Once set-up is complete, you can visit [your-server-root]/[project name]/public/ to see the results
