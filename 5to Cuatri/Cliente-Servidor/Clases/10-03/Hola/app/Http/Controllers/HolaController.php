<?php

namespace App\Http\Controllers;

use App\Models\Hola;
use App\Http\Requests\StoreHolaRequest;
use App\Http\Requests\UpdateHolaRequest;
use Illuminate\Support\Facades\DB;

class HolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Http\Requests\StoreHolaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHolaRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     /* @param  \App\Models\Hola  $hola
     /* @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cp = $_GET['code'];
        $j = DB::table('holas')->where('Codigo', '=', $cp)->get();
        $d=json_decode($j, true);
        $v=[];

        foreach ($d as $b) {
            $v[] = [
                'Asentamiento' => $b['Asentamiento'],
                'Municipio' => $b['Municipio'],
                'Ciudad' => $b['Ciudad']
            ];
        }
        return view('index', ['codigos' => $v, 'LooL' => $cp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hola  $hola
     * @return \Illuminate\Http\Response
     */
    public function edit(Hola $hola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHolaRequest  $request
     * @param  \App\Models\Hola  $hola
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHolaRequest $request, Hola $hola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hola  $hola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hola $hola)
    {
        //
    }
}
