<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursSto;
use App\Models\Sto;
use Illuminate\Http\Request;

class StoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stolovi = Sto::all();
        return ResursSto::collection($stolovi);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sto  $sto
     * @return \Illuminate\Http\Response
     */
    public function show(Sto $sto)
    {
        return new ResursSto($sto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sto  $sto
     * @return \Illuminate\Http\Response
     */
    public function edit(Sto $sto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sto  $sto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sto $sto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sto  $sto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sto $sto)
    {
        //
    }
}
