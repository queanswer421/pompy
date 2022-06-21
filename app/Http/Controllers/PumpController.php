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
    public function wylicz($arrayHelp, $array){
    //uzupełnienie punktow które sa puste.
    //2 i 7 muszą być podane...
        if (is_null($array[2])){
        $array[2] = round($array[3] - ((abs($array[3] - $array[4]))/(abs($arrayHelp[3]-$arrayHelp[4])))*abs($arrayHelp[2]-$arrayHelp[3]),2);
        }
        if (is_null($array[1])){
        $array[1] = round($array[2] - ((abs($array[2] - $array[3]))/(abs($arrayHelp[2]-$arrayHelp[3])))*abs($arrayHelp[1]-$arrayHelp[2]),2);
        }
        if (is_null($array[0])){
        $array[0] = round($array[1] - ((abs($array[1] - $array[2]))/(abs($arrayHelp[1]-$arrayHelp[2])))*abs($arrayHelp[0]-$arrayHelp[1]),2);
        }
        if (is_null($array[5])){
        $array[5] = round($array[4] + ((abs($array[3] - $array[4]))/(abs($arrayHelp[3]-$arrayHelp[4])))*abs($arrayHelp[5]-$arrayHelp[4]),2);
        }
        if (is_null($array[6])){
        $array[6] = round($array[5] + ((abs($array[4] - $array[5]))/(abs($arrayHelp[4]-$arrayHelp[5])))*abs($arrayHelp[6]-$arrayHelp[5]),2);
        }
        if (is_null($array[7]) || $array[7] == 0){
        $array[7] = round($array[6] + ((abs($array[5] - $array[6]))/(abs($arrayHelp[5]-$arrayHelp[6])))*abs($arrayHelp[7]-$arrayHelp[6]),2);
        }
        return $array;
    }
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
        $arrayHelp = array(-20, -15, -7, 2, 7, 10, 12, 20 );
        // $a0 = $this->wylicz();
        // $a1 = $this->wylicz();
        // $a0 = $this->wylicz($arrayHelp, $array);
        $arrayAdd = $this->wylicz($arrayHelp, $array);
        // $a3 = $this->wylicz();
        // $a4 = $this->wylicz();
        // $a5 = $this->wylicz();
        // $a6 = $this->wylicz();
        // $a7 = $this->wylicz();

        // $arrayAdd = array(
        //     $a0,
        //     abs(-100),
        //     null,
        //     4.2,
        //     2,
        //     3,
        //     null,
        //     null
        // );

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
