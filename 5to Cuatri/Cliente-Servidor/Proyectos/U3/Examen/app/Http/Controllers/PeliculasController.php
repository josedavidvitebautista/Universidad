<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use App\Http\Requests\StorePeliculasRequest;
use App\Http\Requests\UpdatePeliculasRequest;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeliculasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeliculasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function show(Peliculas $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function edit(Peliculas $peliculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeliculasRequest  $request
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeliculasRequest $request, Peliculas $peliculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peliculas $peliculas)
    {
        //
    }
}
