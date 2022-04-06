<?php

namespace App\Http\Controllers;

use App\Models\Director_Peliculas;
use App\Http\Requests\StoreDirector_PeliculasRequest;
use App\Http\Requests\UpdateDirector_PeliculasRequest;

class DirectorPeliculasController extends Controller
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
     * @param  \App\Http\Requests\StoreDirector_PeliculasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDirector_PeliculasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Director_Peliculas  $director_Peliculas
     * @return \Illuminate\Http\Response
     */
    public function show(Director_Peliculas $director_Peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Director_Peliculas  $director_Peliculas
     * @return \Illuminate\Http\Response
     */
    public function edit(Director_Peliculas $director_Peliculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDirector_PeliculasRequest  $request
     * @param  \App\Models\Director_Peliculas  $director_Peliculas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDirector_PeliculasRequest $request, Director_Peliculas $director_Peliculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Director_Peliculas  $director_Peliculas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director_Peliculas $director_Peliculas)
    {
        //
    }
}
