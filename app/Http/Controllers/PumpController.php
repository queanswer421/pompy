<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pump;
use App\Http\Requests\StorePumpRequest;
use App\Http\Requests\UpdatePumpRequest;
use App\Http\Resources\PumpResource;

class PumpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PumpResource(Pump::with(['producer','category','type'])->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePumpRequest $request)
    {
        // dd($request->model);
        // $request->validate([
        //     'producer_id' => 'required',
        //     'model' => 'required',
        //     'power' => 'required',
        //     'category_id' => 'required',
        // ]);
        $pump = Pump::create($request->all());
        
        $heat35 = new \App\Models\Heat35($request->all());
        $heat35->pump_id = $pump->id;
        $heat35->save();
        // $heat45 = new Heat45($request->all());
        // $heat45->pump_id = $pump->id;
        // $heat45->save();
        // $heat55 = new Heat55($request->all());
        // $heat55->pump_id = $pump->id;
        // $heat55->save();
        return "Dodano pompę";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePumpRequest $request, Pump $pump)
    {
        $pump->update($request->all());
        $pump->save();
          
        return new PumpResource($pump);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pump $pump)
    {
        $pump->delete();
        return response(null, 204);
    }
}
