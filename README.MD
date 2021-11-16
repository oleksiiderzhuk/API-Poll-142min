22 download endpoint
php artisan make:controller FilesController
routes/api.php - Route::get('files/get', 'FilesController@show');
add public function show() to app/http/Controllers/FilesController
copy somefile to storage/app/

---

21 Paginate the API

---

Managing subresources

Loading Subresources
Add relations

---

making  endpoint for Questions, using QuestionsController
    php artisan make:controller QuestionsController --resource --model=Question
api.php:
    Route::apiResource('questions', 'QuestionsCont roller');
QuestionController.php:
    

---

making resources for data transforming
php artisan make:resource Poll      //creates /app/Http/Resources/Poll.php

---

adding a record
    create post route in routes/api.php
    create public function store() in PollsController.php
    making POST request with Insomnia program to http://127.0.0.1:8000/api/polls: 500Error...
    edit Poll.php: add protected $fillable = ['title]
    making POST request with Insomnia program to http://127.0.0.1:8000/api/polls: 201Created :)
    making POST request with Postman: POST to http://127.0.0.1:8000/api/polls with KEY=title; VALUE=testing2: status 201Created :)
  
    
---

to display a single record 
    edit routes/api.php
    create public function show() in PollsController.php


---

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