<?php
$url = "https://sudoku-api.vercel.app/api/dosuku";
$query = "{newboard(limit:1){grids{value,solution,difficulty}}}";

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "{$url}?query={$query}",
    // CURLOPT_RETURNTRANSFER => true,
    // CURLOPT_ENCODING => "",
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
    echo $response;
}

// require_view('board.view.php');
