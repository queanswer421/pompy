<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Pump;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $house = House::latest()->get();
      
        return view('house.index',compact('house'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('house.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->input('heatDemand');
        $request->validate([
            'surface' => 'required',
            'type' => 'required',
            'temp' => 'required',
            'cwu' => 'required',
        ]);

        $data = $request->all();
        $data['cwu'] = $data['cwu']*0.25;
        $data['heatDemand'] = $data['surface']*$data['type']/1000;
        $data['heatDemandM15'] = ($data['heatDemand']/40)*35+$data['cwu'];
        $data['heatDemandM7'] = ($data['heatDemand']/40)*27+$data['cwu'];
        $data['heatDemandP2'] = ($data['heatDemand']/40)*18+$data['cwu'];
        House::create($data);
        
        // $request->surface*$request->type/1000;
        // House::create($request->all());
       
        return redirect()->route('house.index')
                        ->with('success','Wycena pompy dodana.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        // $pumps1 = Pump::where([['category_id', 1],['p35M7','>=',$house->heatDemandM7]])->orderBy('p35M7', 'ASC')->take(1)->get();
        // $pumps2 = Pump::where([['category_id', 2],['p35M7','>=',$house->heatDemandM7]])->orderBy('p35M7', 'ASC')->take(1)->get();
        // $pumps3 = Pump::where([['category_id', 3],['p35M7','>=',$house->heatDemandM7]])->orderBy('p35M7', 'ASC')->take(1)->get();
        // $pumps4 = Pump::where([['category_id', 2],['p35M7','<=',$house->heatDemandM7]])->orderBy('p35M7', 'ASC')->take(1)->first();
        $standard = Pump::where('category_id', 2)->get();
        // $pumps7 = Pump::first();
        dd($standard);
    
        return view('house.show', compact("standard"));
        // return view('house.show', compact("pumps1", "pumps2", "pumps3", "pumps5" ), ['name' => $pumps4]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        //
    }
}
