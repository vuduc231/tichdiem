<?php

namespace App\Services;

use GuzzleHttp\Client;

class ApiServices
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getThongTinQuaTang()
    {
        $response = $this->client->request('GET', 'https://qrcode.sweetsica.com/api/thongtinquatang');

        return json_decode($response->getBody()->getContents(), true);
    }

    public function getCategory($categoryId)
    {
        $response = $this->client->request('GET', "https://qrcode.sweetsica.com/api/get-category/$categoryId");

        return json_decode($response->getBody()->getContents(), true);
    }

}
