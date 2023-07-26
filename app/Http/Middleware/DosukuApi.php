<?php

namespace App\Middleware;

class DosukuApi
{
    private $curl = null;
    private $response = null;

    public function __construct()
    {
        $url = "https://sudoku-api.vercel.app/api/dosuku";
        $query = "{newboard(limit:1){grids{value,solution,difficulty}}}";
        $request_url = "{$url}?query={$query}";
        $this->curl = curl_init($request_url);
        $this->setOptionsArray([
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ]);
        $this->setResponse();
    }

    private function setOptionsArray($options)
    {
        curl_setopt_array($this->curl, $options);
    }
    private function setResponse()
    {
        $this->response = curl_exec($this->curl);
    }
    private function getResponse()
    {
        return $this->response = curl_exec($this->curl);
    }
}
