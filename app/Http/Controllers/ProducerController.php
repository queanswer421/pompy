<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;

class ProducerController extends Controller
{
    public function index()
    {
        $producers = Producer::latest()->get();
      
        return view('producer.index',compact('producers'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('producer.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->all();
        $data['name'] = $data['name'];
        Producer::create($data);
        return redirect()->route('producer.index')
                        ->with('success','Producent dodany.');
    }
}
