<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class WeatherController extends Controller
{
    private $requestClient;

    private $apiKey;

    public function __construct()
    {
        $this->requestClient = new GuzzleClient();
        $this->apiKey = '9d33c6ae26cc5c7b23e19f357749aab6';
    }

    public function find(Request $request): string
    {
        $location = $request->location;
        if (trim($location) === '') {
            return json_encode([
                'success' => false
            ]);
        }

        $url = sprintf(
            'http://api.openweathermap.org/data/2.5/weather?q=%s,uk&units=metric&appid=%s',
            $location,
            $this->apiKey
        );

        $response = $this->requestClient->get($url);

        $data = $response->getBody()->getContents();

        return json_encode([
            'sucess' => true,
            'location' => $request->location,
            'data' => $data
        ]);
    }
}
