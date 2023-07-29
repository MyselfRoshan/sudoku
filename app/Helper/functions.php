<?php

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function require_view($path, $attributes = [])
{
    extract($attributes);
    require base_path("views/{$path}");
}

function login($user)
{
    $_SESSION['user'] = [
        'username' => $user['username'],
        'email' => $user['email']
    ];
    session_regenerate_id(true);
}

function logout()
{
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie(
        'PHPSESSID',
        '',
        time() - 3333,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}
