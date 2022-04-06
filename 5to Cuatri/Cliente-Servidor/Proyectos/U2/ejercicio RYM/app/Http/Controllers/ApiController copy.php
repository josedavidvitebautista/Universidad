<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function inicio()
    {

       
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('get', 'https://apisar.herokuapp.com/api/Terminator');
        $datos = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $personajes = [];
       

        foreach ($datos as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'Titulo' => $personaje['Titulo'],
                'Poster' => $personaje['Poster']
            ];
        }

        return view('inicio',['personajes' => $personajes]);
    }

    public function detallePersonaje($id){

        // -- consumir api Rick and Morty
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://apisar.herokuapp.com/api/Terminator'.$id);
        $personajeIndividual = json_decode($response->getBody()->getContents(), true);

        // -- Generar número aleatorio entre 0 y 42
        $numero = rand(0, 42);

         // -- consumir api Rick and Morty
         $cliente = new \GuzzleHttp\Client();
         $response = $cliente->request('get', 'https://apisar.herokuapp.com/api/Terminator'.$numero);
         $datos = json_decode($response->getBody()->getContents(), true);

         // -- Recorrer elementos
         $personajes = [];

         foreach ($datos['results'] as $personaje) {
             $personajes[] = [
                'id' => $personaje['id'],
                'Titulo' => $personaje['Titulo'],
                'Poster' => $personaje['Poster'],
             ];
         }

        return view('personaje',['personaje' => $personajeIndividual, 'personajes' => $personajes]);

    }

    public function inicio1()
    {

       
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('get', 'https://apisar.herokuapp.com/api/Marvel');
        $datos = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $personajes = [];
       

        foreach ($datos as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'Titulo' => $personaje['Titulo'],
                'Poster' => $personaje['Poster']
            ];
        }

        return view('inicio1',['personajes' => $personajes]);
    }

    public function pelicula($id){

        // -- consumir api Rick and Morty
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://apisar.herokuapp.com/api/Marvel'.$id);
        $personajeIndividual = json_decode($response->getBody()->getContents(), true);

        // -- Generar número aleatorio entre 0 y 42
        $numero = rand(0, 42);

         // -- consumir api Rick and Morty
         $cliente = new \GuzzleHttp\Client();
         $response = $cliente->request('get', 'https://apisar.herokuapp.com/api/Marvel'.$numero);
         $datos = json_decode($response->getBody()->getContents(), true);

         // -- Recorrer elementos
         $personajes = [];

         foreach ($datos['results'] as $personaje) {
             $personajes[] = [
                'id' => $personaje['id'],
                'Titulo' => $personaje['Titulo'],
                'Poster' => $personaje['Poster'],
             ];
         }

        return view('personaje',['personaje' => $personajeIndividual, 'personajes' => $personajes]);

    }

    public function inicio2()
    {

       
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('get', 'https://apisar.herokuapp.com/api/DC');
        $datos = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos
        $personajes = [];
       

        foreach ($datos as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'Titulo' => $personaje['Titulo'],
                'Poster' => $personaje['Poster']
            ];
        }

        return view('inicio1',['personajes' => $personajes]);
    }

    public function peliculaDC($id){

        // -- consumir api Rick and Morty
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://apisar.herokuapp.com/api/DC'.$id);
        $personajeIndividual = json_decode($response->getBody()->getContents(), true);

        // -- Generar número aleatorio entre 0 y 42
        $numero = rand(0, 42);

         // -- consumir api Rick and Morty
         $cliente = new \GuzzleHttp\Client();
         $response = $cliente->request('get', 'https://apisar.herokuapp.com/api/DC'.$numero);
         $datos = json_decode($response->getBody()->getContents(), true);

         // -- Recorrer elementos
         $personajes = [];

         foreach ($datos['results'] as $personaje) {
             $personajes[] = [
                'id' => $personaje['id'],
                'Titulo' => $personaje['Titulo'],
                'Poster' => $personaje['Poster'],
             ];
         }

        return view('personaje',['personaje' => $personajeIndividual, 'personajes' => $personajes]);

    }

}
