<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursGost;
use App\Models\Gost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gosti = Gost::all();
        return ResursGost::collection($gosti);
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
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function show(Gost $gost)
    {
        return new ResursGost($gost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function edit(Gost $gost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gost $gost)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'brojTelefona' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $gost->ime = $request->ime;
        $gost->brojTelefona = $request->brojTelefona;
        $gost->save();

        return response()->json(['Gost je uspešno ažuriran!', new ResursGost($gost)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gost $gost)
    {
        $gost->delete();
        return response()->json(['Gost je uspešno obrisan!', new ResursGost($gost)]);
    }
}
