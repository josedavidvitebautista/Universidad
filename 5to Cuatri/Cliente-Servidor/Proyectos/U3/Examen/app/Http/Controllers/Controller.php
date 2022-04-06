<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $num = 2;
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=1');
        $datos = json_decode($response->getBody()->getContents(), true);

        return $datos;
    }
}
