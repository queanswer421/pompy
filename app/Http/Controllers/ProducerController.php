<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;
use App\Http\Resources\ProducerResource;
use App\Http\Requests\StoreProducerRequest;
use App\Http\Requests\UpdateProducerRequest;

class ProducerController extends Controller
{
    public function index()
    {
        return new ProducerResource(Producer::all());
    }
    // public function create()
    // {
    //     return view('producer.create');
    // }
    public function store(StoreProducerRequest $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $producers = Producer::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
          ]);
    
          return new ProducerResource($producers);
    }
    public function update(UpdateProducerRequest $request, Producer $producer)
    {
        $producer->update($request->all());
        $producer->save();
          
        return new ProducerResource($producer);
    }
}
