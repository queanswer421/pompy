<?php

namespace App\Http\Controllers;

use App\Models\Pump;

use Illuminate\Http\Request;

class PumpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $pump = Pump::latest()->get();
      
        return view('pump.index',compact('pump'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pump.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'producer' => 'required',
            'model' => 'required',
            'category_id' => 'required',
        ]);
        // $request->input('p35m20') = -1;
        // $request->input('p45m20')= -1;
        // $request->input('p55m20')= -1;
        // $request->input('p35m15')= -1;
        // $request->input('p45m15');
        // $request->input('p55m15');
        // $request->input('p35m7');
        // $request->input('p45m7');
        // $request->input('p55m7');
        // $request->input('p35p2');
        // $request->input('p45p2');
        // $request->input('p55p2');
        // $request->input('p35p7');
        // $request->input('p45p7');
        // $request->input('p55p7');
        // $request->input('p35p10');
        // $request->input('p45p10');
        // $request->input('p55p10');
        // $request->input('p35p12');
        // $request->input('p45p12');
        // $request->input('p55p12');
        // $request->input('p35p20');
        // $request->input('p45p20');
        // $request->input('p55p20');
        Pump::create($request->all());
       
        return redirect()->route('pump.index')
                        ->with('success','Pompa ciepła została dodana.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function show(Pump $pump)
    {
        // dd($pump);
        // $array = array(
        //     'm20' => 100,
        //     'm15' => 3.50,
        //     'm7' => 100,
        //     'p2' => 3.50,
        //     'p7' => 100,
        //     'p10' => 3.50,
        //     'p12' => 100,
        //     'p20' => 3.50,
        //   );
        // $array = array(
        //     -20 => $pump->p35m20,
        //     -15 => $pump->p35m15,
        //     -7 => $pump->p35m7,
        //     2 => $pump->p35p2,
        //     7 => $pump->p35p7,
        //     10 => $pump->p35p10,
        //     12 => $pump->p35p12,
        //     20 => $pump->p35p20,
        //   );

        $array = array(
            $pump->p35m20,
            $pump->p35m15,
            $pump->p35m7,
            $pump->p35p2,
            $pump->p35p7,
            $pump->p35p10,
            $pump->p35p12,
            $pump->p35p20,
        );
        $arrayAdd = array(
            null,
            null,
            55,
            1.2,
            2,
            3,
            null,
            null

        );
        foreach($arrayAdd as $index => $ar) {
            if ($arrayAdd[$index] == null){
                //szukaj starszego



                //szukaj młodszego 
                // $prev = null;
                // while( $prev == null ){
                //     if ($arrayAdd[$index-1] == null ){

                //     }
                // }



                
            }
        }



        // if ($arrayAdd[0] == null) {
        //     if ($arrayAdd[1] == null){
        //         if($arrayAdd[2] == null){
        //             $arrayAdd[2] = 777;
        //         }
        //         else
        //         {
        //             $arrayAdd[1] = 888;
        //         }
        //     }
        // }
        // dd($array[0]);
        return view('pump.show', compact('array', 'arrayAdd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function edit(Pump $pump)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pump $pump)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pump $pump)
    {
        //
    }
}
