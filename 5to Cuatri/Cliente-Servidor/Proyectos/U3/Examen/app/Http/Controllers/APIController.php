<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(){
        $cliente = new \GuzzleHttp\Client();
        $response1 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=1');
        $uno = json_decode($response1->getBody()->getContents(), true);
        $datos1 = [];
        $datos1[] = $uno;

        $response2 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=2');
        $dos = json_decode($response2->getBody()->getContents(), true);
        $datos2 = [];
        $datos2[] = $dos;

        $response3 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=3');
        $tres = json_decode($response3->getBody()->getContents(), true);
        $datos3 = [];
        $datos3[] = $tres;

        $response4 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=4');
        $cuatro = json_decode($response4->getBody()->getContents(), true);
        $datos4 = [];
        $datos4[] = $cuatro;

        $response5 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=5');
        $cinco = json_decode($response5->getBody()->getContents(), true);
        $datos5 = [];
        $datos5[] = $cinco;

        $info = [];

        foreach ($datos1 as $value){
            $info[] = [
                'Actividad' => $value['activity'],
                'Tipo' => $value['type'],
                'Participante' => $value['participants'],
                'Precio' => $value['price'],
                'Enlace' => $value['link'],
                'Accesibilidad' => $value['accessibility']
            ];
        }

        foreach ($datos2 as $value){
            $info[] = [
                'Actividad' => $value['activity'],
                'Tipo' => $value['type'],
                'Participante' => $value['participants'],
                'Precio' => $value['price'],
                'Enlace' => $value['link'],
                'Accesibilidad' => $value['accessibility']
            ];
        }

        foreach ($datos3 as $value){
            $info[] = [
                'Actividad' => $value['activity'],
                'Tipo' => $value['type'],
                'Participante' => $value['participants'],
                'Precio' => $value['price'],
                'Enlace' => $value['link'],
                'Accesibilidad' => $value['accessibility']
            ];
        }

        foreach ($datos4 as $value){
            $info[] = [
                'Actividad' => $value['activity'],
                'Tipo' => $value['type'],
                'Participante' => $value['participants'],
                'Precio' => $value['price'],
                'Enlace' => $value['link'],
                'Accesibilidad' => $value['accessibility']
            ];
        }

        foreach ($datos5 as $value){
            $info[] = [
                'Actividad' => $value['activity'],
                'Tipo' => $value['type'],
                'Participante' => $value['participants'],
                'Precio' => $value['price'],
                'Enlace' => $value['link'],
                'Accesibilidad' => $value['accessibility']
            ];
        }

        return $info;
    }

    public function indexview(){
        $cliente = new \GuzzleHttp\Client();
        $response1 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=1');
        $uno = json_decode($response1->getBody()->getContents(), true);
        $datos1 = [];
        $datos1[] = $uno;

        $response2 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=2');
        $dos = json_decode($response2->getBody()->getContents(), true);
        $datos2 = [];
        $datos2[] = $dos;

        $response3 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=3');
        $tres = json_decode($response3->getBody()->getContents(), true);
        $datos3 = [];
        $datos3[] = $tres;

        $response4 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=4');
        $cuatro = json_decode($response4->getBody()->getContents(), true);
        $datos4 = [];
        $datos4[] = $cuatro;

        $response5 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=5');
        $cinco = json_decode($response5->getBody()->getContents(), true);
        $datos5 = [];
        $datos5[] = $cinco;

        $info = [];

        $num = $_GET['numero'];

        if($num == 1){
            foreach ($datos1 as $value){
                $info[] = [
                    'Actividad' => $value['activity'],
                    'Tipo' => $value['type'],
                    'Participante' => $value['participants'],
                    'Precio' => $value['price'],
                    'Enlace' => $value['link'],
                    'Accesibilidad' => $value['accessibility']
                ];
            }
            return view('API.ViewAPI2', ['Dato' => $info]);
        }else{
            if($num == 2){
                foreach ($datos2 as $value){
                    $info[] = [
                        'Actividad' => $value['activity'],
                        'Tipo' => $value['type'],
                        'Participante' => $value['participants'],
                        'Precio' => $value['price'],
                        'Enlace' => $value['link'],
                        'Accesibilidad' => $value['accessibility']
                    ];
                }
                return view('API.ViewAPI2', ['Dato' => $info]);
            }
            else{
                if($num == 3){
                    foreach ($datos3 as $value){
                        $info[] = [
                            'Actividad' => $value['activity'],
                            'Tipo' => $value['type'],
                            'Participante' => $value['participants'],
                            'Precio' => $value['price'],
                            'Enlace' => $value['link'],
                            'Accesibilidad' => $value['accessibility']
                        ];
                    }
                    return view('API.ViewAPI2', ['Dato' => $info]);
                }
                else{
                    if($num == 4){
                        foreach ($datos4 as $value){
                            $info[] = [
                                'Actividad' => $value['activity'],
                                'Tipo' => $value['type'],
                                'Participante' => $value['participants'],
                                'Precio' => $value['price'],
                                'Enlace' => $value['link'],
                                'Accesibilidad' => $value['accessibility']
                            ];
                        }
                        return view('API.ViewAPI2', ['Dato' => $info]);
                    }
                    else{
                        if($num == 5){
                            foreach ($datos5 as $value){
                                $info[] = [
                                    'Actividad' => $value['activity'],
                                    'Tipo' => $value['type'],
                                    'Participante' => $value['participants'],
                                    'Precio' => $value['price'],
                                    'Enlace' => $value['link'],
                                    'Accesibilidad' => $value['accessibility']
                                ];
                            }
                            return view('API.ViewAPI2', ['Dato' => $info]);
                        }
                        else{
                            return view('API.ViewAPI1');
                        }
                    }
                }
            }
        }
    }

    public function returnapi(){
        return view('API.ViewAPI1');
    }
}
