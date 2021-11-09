php artisan migrate:fresh --seed

php artisan make:model Poll

php artisan make:model Question

php artisan make:model Answer

php artisan db:seed

getting the records for the endpoint: simple API endpoint to get all the polls, to begin with make controller:
    php artisan make:controller PollsController
    edit routes/api.php
    edit http/Controllers/PollsController.php 

php artisan serve

test working GET request http://127.0.0.1:8000/api/polls (for example via Postman ) :)