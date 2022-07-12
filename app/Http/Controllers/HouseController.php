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
            ($house->heatDemand/40)*0
        ];
        
        $basic = Pump::where('category_id', 3)->get();
        $standard = Pump::where('category_id', 2)->get();
        $pro = Pump::where('category_id', 1)->get();

/*            for($n=0;$n<$standard->count();$n++){
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
                $find = false;
                
                if($find == false){
                    for ($i = 0; $i<=7; $i++){
                        if($i<7){
                        //    echo "<br><b>".$chart[$i]." => </b>";
                            for($j = 0;$j<abs($chart[$i+1]-$chart[$i]);$j++){
                                $heat = ($house->heatDemand/40)*abs(($chart[$i]+$j)-20);
                                // echo $chart[$i]+$j ." ".$i." ".$j." ".$heat. "<br>";
                                // echo " ".$heat. " ";
                                $pump = $array35[$i] + ($j)*($array35[$i+1] - $array35[$i])/abs($chart[$i+1]-$chart[$i]);
                                        //    echo round($pump, 2).", <font color='red'>".$heat." ";
                                    if ($pump <= $heat){
                                        echo $chart[$i]+$j;
                                        echo " <b>".round($pump, 2)."</b> ".round($heat, 2)." ";
                                        echo "<font color='red'><b>Pompa za słaba</b></font> ";
                                        echo $find ? 'true' : 'false' . "<br>";
                                        $standard[$n]->tempBiwa = $chart[$i]+$j; 
                                    }
                                    else {
                                        $find = true;
                                        echo $chart[$i]+$j;
                                        echo " <b>".round($pump, 2)."</b> ".round($heat, 2)." ";
                                        echo "<font color='green'><b>Pompa wystarcza</b></font> ";
                                        echo $find ? 'true' : 'false';
                                        echo "<br>";
                                    }
                            }
                        }               
                    }
                }
        }
*/
        $basic = $this->pumps($basic, $house);
        $basic = $basic->sortByDesc('tempBiwa')->values()->all();
        $standard = $this->pumps($standard, $house);
        $standard = $standard->sortByDesc('tempBiwa')->values()->all();
        $pro = $this->pumps($pro, $house);
        $pro = $pro->sortByDesc('tempBiwa')->values()->all();

        return view('house.show', compact('house','basic', 'standard','pro', 'chartHouse'));
    }
    public function pumps($pumps, $house){
        $chart = [-20, -15, -7, 2, 7, 10, 12, 20];
        $h = 'heat'.$house->temp;
        for($n=0;$n<$pumps->count();$n++){
            $array35 = [
                $pumps[$n]->$h->p35m20,
                $pumps[$n]->$h->p35m15,
                $pumps[$n]->$h->p35m7,
                $pumps[$n]->$h->p35p2,
                $pumps[$n]->$h->p35p7,
                $pumps[$n]->$h->p35p10,
                $pumps[$n]->$h->p35p12,
                $pumps[$n]->$h->p35p20
            ];
            $find = false;
            
            if($find == false){
                for ($i = 0; $i<=7; $i++){
                    if($i<7){
                    //    echo "<br><b>".$chart[$i]." => </b>";
                        for($j = 0;$j<abs($chart[$i+1]-$chart[$i]);$j++){
                            $heat = ($house->heatDemand/40)*abs(($chart[$i]+$j)-20);
                            // echo $chart[$i]+$j ." ".$i." ".$j." ".$heat. "<br>";
                            // echo " ".$heat. " ";
                            $pump = $array35[$i] + ($j)*($array35[$i+1] - $array35[$i])/abs($chart[$i+1]-$chart[$i]);
                                    //    echo round($pump, 2).", <font color='red'>".$heat." ";
                                if ($pump <= $heat){
                                    // echo $chart[$i]+$j;
                                    // echo " <b>".round($pump, 2)."</b> ".round($heat, 2)." ";
                                    // echo "<font color='red'><b>Pompa za słaba</b></font> ";
                                    // echo $find ? 'true' : 'false' . "<br>";
                                    $pumps[$n]->tempBiwa = $chart[$i]+$j; 
                                }
                                else {
                                    $find = true;
                                    // echo $chart[$i]+$j;
                                    // echo " <b>".round($pump, 2)."</b> ".round($heat, 2)." ";
                                    // echo "<font color='green'><b>Pompa wystarcza</b></font> ";
                                    // echo $find ? 'true' : 'false';
                                    // echo "<br>";
                                }
                        }
                    }               
                }
            }
        }
        return $pumps;
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
