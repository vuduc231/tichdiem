<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Termwind\Components\Dd;

class ApiServices
{
    private mixed $client;
    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
        //add middleware to attach token to request
        $this->client = Http::withMiddleware(
            Middleware::mapRequest(
                function (RequestInterface $request) {
                    $token = session()->get('access_token');
                    $request = $request
                        ->withHeader('Accept', 'application/json')
                        ->withHeader('Content-Type', 'application/json');
                    //attach token to request if it exists
                    if ($token) {
                        $request = $request
                            ->withHeader('Authorization', 'Bearer ' . $token);
                    } else {
                        // Clear the Authorization header if the token does not exist
                        $request = $request->withoutHeader('Authorization');
                    }
                    return $request;
                },
            )
        );
    }
    // ####### POST METHOD #######
    public function login($phone, $password)
    {
        $url = $this->apiUrl . '/login';
        $response = $this->client->post($url, [
            'phone' => $phone,
            'password' => $password
        ]);
        return json_decode((string)$response->getBody()->getContents(), true);
    }
    public function register($name, $phone, $email, $password)
    {
        $url = $this->apiUrl . '/dangky';
        $response = $this->client->post($url, [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $password
        ]);
        return json_decode((string)$response->getBody()->getContents(), true);
    }
    public function changeInfo($name, $email, $address)
    {
        $url = $this->apiUrl . '/change-info';
        $response = $this->client->post($url, [
            'name' => $name,
            'email' => $email,
            'address' => $address
        ]);
        return json_decode((string)$response->getBody()->getContents(), true);
    }

    public function contact($data)
    {
        $response = $this->client->post($this->apiUrl . '/help/send');
        return json_decode($response->getBody()->getContents(), true);
    }

    public function changeGift($customer_id, $gift_id, $type)
    {
        $url = $this->apiUrl . '/doiqua';
        $response = $this->client->post($url, [
            'customer_id' => $customer_id,
            'gift_id' => $gift_id,
            'type' => $type
        ]);
        return json_decode((string)$response->getBody()->getContents(), true);
    }
    public function accumulatePoint($special_code, $user, $product_id, $promotion_id)
    {
        $url = $this->apiUrl . '/tichdiem';
        $response = $this->client->post($url, [
            'special_code' => $special_code,
            'user' => $user,
            'product_id' => $product_id,
            'promotion_id' => $promotion_id
        ]);
        return json_decode((string)$response->getBody()->getContents(), true);
    }
    public function infoQr($specialCode)
    {
        $url = $this->apiUrl . '/info-qr-code';
        $response = $this->client->post($url, [
            'special_code' => $specialCode
        ]);
        return json_decode((string)$response->getBody()->getContents(), true);
    }

    // ####### GET METHOD #######
    public function getUser($userId)
    {
        $response = $this->client->get($this->apiUrl . '/nguoidung/' . $userId);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getThongTinQuaTang()
    {
        $response = $this->client->get($this->apiUrl . '/thongtinquatang');
        return json_decode($response->getBody()->getContents(), true);
    }
    public function product($id)
    {
        $response = $this->client->get($this->apiUrl . '/product/'. $id);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getWoman()
    {
        $response = $this->client->get($this->apiUrl . '/get-category/2');
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getMen()
    {
        $response = $this->client->get($this->apiUrl . '/get-category/3');
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getChild()
    {
        $response = $this->client->get($this->apiUrl . '/get-category/4');
        return json_decode($response->getBody()->getContents(), true);
    }

    public function historyPoint()
    {
        $response = $this->client->get($this->apiUrl . '/history');
        return json_decode($response->getBody()->getContents(), true);
    }

    public function historyExchange()
    {
        $response = $this->client->get($this->apiUrl . '/history-gift-exchange');
        return json_decode($response->getBody()->getContents(), true);
    }
    public function getContentList()
    {
        $response = $this->client->get($this->apiUrl . '/content/list');
        return json_decode($response->getBody()->getContents(), true);
    }
    public function getPromotion()
    {
        $response = $this->client->get($this->apiUrl . '/promotion');
        return json_decode($response->getBody()->getContents(), true);
    }
    
}
