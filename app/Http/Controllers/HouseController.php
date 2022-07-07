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
        $chart = [-20, -15, -7, 2, 7, 10, 12, 20];
        $chartHouse = [
         $house->heatDemand,
         ($house->heatDemand/40)*35,
        ($house->heatDemand/40)*27,
        ($house->heatDemand/40)*18,
        ($house->heatDemand/40)*13,
         ($house->heatDemand/40)*10,
         ($house->heatDemand/40)*8,
         ($house->heatDemand/40)*0];
        
        // $pumps1 = Pump::where([['category_id', 1],['p35M7','>=',$house->heatDemandM7]])->orderBy('p35M7', 'ASC')->take(1)->get();
        // $pumps2 = Pump::where([['category_id', 2],['p35M7','>=',$house->heatDemandM7]])->orderBy('p35M7', 'ASC')->take(1)->get();
        // $pumps3 = Pump::where([['category_id', 3],['p35M7','>=',$house->heatDemandM7]])->orderBy('p35M7', 'ASC')->take(1)->get();
        // $pumps4 = Pump::where([['category_id', 2],['p35M7','<=',$house->heatDemandM7]])->orderBy('p35M7', 'ASC')->take(1)->first();
        $standard = Pump::where('category_id', 2)->get();

            for($n=0;$n<$standard->count();$n++){
                $array35 = [
                    $standard[$n]->heat35->p35m20,
                    $standard[$n]->heat35->p35m15,
                    $standard[$n]->heat35->p35m7,
                    $standard[$n]->heat35->p35p2,
                    $standard[$n]->heat35->p35p7,
                    $standard[$n]->heat35->p35p10,
                    $standard[$n]->heat35->p35p12,
                    $standard[$n]->heat35->p35p20
                ];
                for ($i = 0; $i<=7; $i++){
                    if($i<7){
                        echo "<br><b>".$chart[$i]." => </b>";
                        for($j = 0;$j<=abs($chart[$i+1]-$chart[$i])-1;$j++){
                            $heat = ($house->heatDemand/40)*abs($chart[$i]-20-$j);
                            $pump = $array35[$i] + ($j)*($array35[$i+1] - $array35[$i])/abs($chart[$i+1]-$chart[$i]);
                            echo $pump.", <b>".$heat. " , </b>";
  
                            if ($heat <= $pump){
                                    echo "+";
                                }
                                else {
                                    $standard[$n]->temp = $chart[$i]+$j+1;
                                    echo "<<".$chart[$i]+$j.">>";   
                                }
                        }
                    }
                    else 
                    echo "<br><b>".$chart[7]." => ".$array35[7]."</b>";
                }
            }


            // for ($i=20; $i <= 20; $i++) { 
            //     echo $i ." ";
            //     for ($j = 0; $j < $standard->count(); $j++){
            //         echo $standard[$j]->producer." ".$standard[$j]->model."<br>";
            //         $standard[$j]->temp = $j + 100;
            //     }
            //     // $heat = ($house->heatDemand/40)*abs($i-20);
            //     // $pump = $standard[0]->heat35->p35m15 + (($i+15)*(($standard[0]->heat35->p35m7 - $standard[0]->heat35->p35m15)/($chart[2]-$chart[1])));
            //     // if ($heat >= $pump){
            //     // echo ($house->heatDemand/40)*abs($i-20) ." ".$pump. "<br>";
            //     // }
            //     // else {
            //     //     echo "<b>". $i ." ". ($house->heatDemand/40)*abs($i-20) ." ".$pump. "<b><br>";
            //     //     break;
            //     // }
            // }
            //     echo "<b>".$standard[2]->temp."<b>";

        // for ($i=-7; $i <= 2; $i++) { 
        //     $heat = ($house->heatDemand/40)*abs($i-20);
        //     $pump = $standard[0]->p35m7 + (($i+7)*(($standard[0]->p35p2 - $standard[0]->p35m7)/9));
        //     if ($heat >= $pump){
        //     echo  $i ." ". ($house->heatDemand/40)*abs($i-20) ." ".$pump. "<br>";
        //     }
        //     else {
        //         echo "<b>". $i ." ". ($house->heatDemand/40)*abs($i-20) ." ".$pump. "<b><br>";
        //     }
        // }

        // $pumps7 = Pump::first();
        // dd($house);
        // dd($standard);
        // foreach($chart as $i => $cha){
        //     if ($chartHouse[$i] > 3)
        //     $chartHouse[$i] = 9;            
        // }
        return view('house.show', compact('house',"standard", 'chartHouse'));
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
