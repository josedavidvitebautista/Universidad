<?php

namespace App\Http\Controllers;

use App\Models\Actores;
use App\Models\Director;
use App\Http\Requests\StoreActoresRequest;
use App\Http\Requests\UpdateActoresRequest;


class ActoresController extends Controller
{
    public function back(){
        $regre = json_decode(Director::all(), true);
        $most = json_decode(Actores::all(), true);

        return view('Sticker.index', ['most' => $most, 'regre' => $regre]);
    }
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
     * @param  \App\Http\Requests\StoreActoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActoresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function show(Actores $actores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function edit(Actores $actores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActoresRequest  $request
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActoresRequest $request, Actores $actores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actores $actores)
    {
        //
    }
}
