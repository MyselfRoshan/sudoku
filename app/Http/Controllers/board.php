<?php

use App\Http\Middleware\Api;

function abort($code = 404)
{
    http_response_code($code);
    require base_path("/views/{$code}.php");
    die();
}

$api = new Api();
$response = $api->getResponse();
$responseArray = json_decode($response, true);
$puzzle = $responseArray["newboard"]["grids"][0]["value"];
$difficulty = $responseArray["newboard"]["grids"][0]["difficulty"];
$solution = $responseArray["newboard"]["grids"][0]["solution"];

if (isset($_GET["solution"]))
    $_GET["solution"] === "true" ? $puzzle = $solution : abort();


require_view('board.view.php', [
    'puzzle' => $puzzle,
    'difficulty' => $difficulty,
    'scripts' => [
        '/resources/js/board.js',
    ]
]);
