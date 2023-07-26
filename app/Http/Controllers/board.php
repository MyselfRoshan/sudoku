<?php
$url = "https://sudoku-api.vercel.app/api/dosuku";
$query = "{newboard(limit:1){grids{value,solution,difficulty}}}";


$request_url = "{$url}?query={$query}";
$curl = curl_init($request_url);
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo "<p>$response</p>";
    $responseArray = json_decode($response ?? $json, true);
    $puzzle = $responseArray["newboard"]["grids"][0]["value"];
    $difficulty = $responseArray["newboard"]["grids"][0]["difficulty"];
    $solution = $responseArray["newboard"]["grids"][0]["solution"];
}
// use '$offlinePuzzle' string if internet in not available in development
$offlinePuzzle = [
    [
        0,
        0,
        0,
        0,
        0,
        0,
        2,
        0,
        3
    ],
    [
        0,
        7,
        6,
        0,
        0,
        9,
        0,
        0,
        5
    ],
    [
        1,
        0,
        3,
        4,
        0,
        0,
        7,
        0,
        0
    ],
    [
        0,
        0,
        0,
        0,
        1,
        0,
        8,
        0,
        7
    ],
    [
        0,
        1,
        5,
        9,
        7,
        8,
        0,
        0,
        2
    ],
    [
        7,
        0,
        0,
        3,
        4,
        6,
        0,
        0,
        9
    ],
    [
        9,
        0,
        8,
        1,
        5,
        7,
        3,
        0,
        6
    ],
    [
        0,
        0,
        0,
        0,
        9,
        4,
        0,
        0,
        1
    ],
    [
        6,
        5,
        1,
        8,
        0,
        0,
        9,
        0,
        0
    ]
];
/* 
{
        'grid':{
            'value:[                      | 'solution:[
                    [0,8,0,0,0,2,4,0,0],  |            [7,8,9,6,5,2,4,3,1],
                    [0,0,0,0,0,8,0,0,0],  |            [4,3,6,1,9,8,5,7,2],
                    [0,0,0,0,0,0,6,9,0],  |            [5,1,2,7,4,3,6,9,8],
                    [0,0,0,0,0,0,2,0,7],  |            [3,5,1,8,6,9,2,4,7],
                    [0,0,0,0,0,0,0,0,9],  |            [6,4,8,2,7,1,3,5,9], 
                    [2,0,0,4,0,5,0,8,0],  |            [2,9,7,4,3,5,1,8,6],
                    [0,0,0,0,0,6,0,0,0],  |            [9,7,5,3,1,6,8,2,4],
                    [0,6,0,9,2,0,0,0,5],  |            [8,6,3,9,2,4,7,1,5],
                    [0,0,4,0,8,0,0,0,0]   |            [1,2,4,5,8,7,9,6,3]
                    ],                    |            ]
        },
        'difficulty':'Medium',
        'message': 'All Ok'
    }
*/
require_view('board.view.php', [
    'puzzle' => $puzzle ?? $offlinePuzzle,
    'difficulty' => $difficulty,
    // 'solution' => $solution
]);
