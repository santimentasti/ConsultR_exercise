## Instructions

1. Initialize the server with php artisan serve.

2. Create a database with the name "exercise".

3. Run the migrations with the command:

    php artisan migrate:fresh

4. Seed with the command:

    php artisan db:seed --class=SuperheroSeeder
    
5. Access to the url localhost:8000/api/superheroes and you will get all the data in the table.

6. Try different filters such as eyeColor, hairColor and Publisher. You can use it like this:

    localhost:8000/api/superheroes?eyeColor=Yellow

7. Or all three together:

    localhost:8000/api/superheroes?eyeColor=Yellow&&hairColor=No Hair&publisher=DC Comics
    
