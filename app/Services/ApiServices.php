<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Termwind\Components\Dd;

class ApiServices
{

    private mixed $client;
    protected string $url;

    public function __construct()
    {
        $this->url = env('API_URL', '');
        //add middleware to attach token to request
        
    }
    //private helper function to transform response array to object
    private function _toObject($array)
    {
        $objectStr = json_encode($array);
        $object = json_decode($objectStr);
        return $object;
    }

    public function login($email, $password)
    {
        $url = $this->url . '/auth/login';
        $response = $this->client->post($url, [
            'email' => $email,
            'password' => $password
        ]);
        //throw exception if response is not successful
        $response->throw();
        //get data from response
        $response->throw()->json()['message'];

        $data = $response->json();
        return $data['data'];
    }

}
