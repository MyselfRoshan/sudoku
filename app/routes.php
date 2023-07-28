<?php

$router->get('/', 'app/Http/Controllers/index.php');
$router->get('/board', 'app/Http/Controllers/board.php');

// Routes for signup
$router->get('/signup', 'app/Http/Controllers/signup/index.php');
$router->post('/signup', 'app/Http/Controllers/signup/submit.php');

// routes for login
$router->get('/login', 'app/Http/Controllers/login.php');
$router->post('/login', 'app/Http/Controllers/login.php');
