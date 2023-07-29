<?php

$router->get('/', 'app/Http/Controllers/index.php');
$router->get('/board', 'app/Http/Controllers/board.php')->only('auth');

// Routes for signup
$router->get('/signup', 'app/Http/Controllers/signup/create.php')->only('guest');
$router->post('/signup', 'app/Http/Controllers/signup/store.php')->only('guest');

// routes for login
$router->get('/login', 'app/Http/Controllers/login/create.php')->only('guest');
$router->post('/login', 'app/Http/Controllers/login/store.php')->only('guest');
$router->delete('/login', 'app/Http/Controllers/login/destroy.php')->only('auth');
