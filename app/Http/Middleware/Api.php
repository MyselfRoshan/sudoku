<?php

namespace App\Http\Middleware;

class Api
{
    private $response;

    public function __construct()
    {

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
        $this->response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
            // use 'offlinePuzzle.json' if internet in not available in development
            $this->response = file_get_contents(base_path("public/resources/js/offlinePuzzle.json"));
        }
    }

    public function getResponse()
    {
        return $this->response;
    }
}
