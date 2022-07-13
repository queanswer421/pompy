<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pump;
use App\Models\House;

class PriceController extends Controller
{
    public function show(Request $request, House $house){

        $request->validate([
            'surface' => 'required',
            'type' => 'required',
            'temp' => 'required',
            'cwu' => 'required',
        ]);
        $house = new House([
            'surface' => $request->input('surface'),
            'type' => $request->input('type'),
            'temp' => $request->input('temp'),
            'cwu' => $request->input('cwu')
        ]);
        $house['cwu'] = $house['cwu']*0.25;
        $house['heatDemand'] = $house['surface']*$house['type']/1000;
        $house['heatDemandM15'] = ($house['heatDemand']/40)*35+$house['cwu'];
        $house['heatDemandM7'] = ($house['heatDemand']/40)*27+$house['cwu'];
        $house['heatDemandP2'] = ($house['heatDemand']/40)*18+$house['cwu'];
        $house['heatDemand'] = $house['surface']*$house['type']/1000+$house['cwu'];

        $pumps = Pump::all();
        for($n=0;$n<$pumps->count();$n++){
            echo $pumps[$n]->model."<br>";
            $array = [
                $pumps[$n]->heat35->m20,
                $pumps[$n]->heat35->m15,
                $pumps[$n]->heat35->m7,
                $pumps[$n]->heat35->p2,
                $pumps[$n]->heat35->p7,
                $pumps[$n]->heat35->p10,
                $pumps[$n]->heat35->p12,
                $pumps[$n]->heat35->p20
            ];
            echo $array[2]."<br>";
        }
        // dd($standard[0]->tempbiwa);
        // $standard = $this->pumps($standardowe, $house);

        // $standard = $this->temp($standardowe);


        // $standard[$temp]->offer = "Polecana!";
        // $standard = $standard->sortByDesc('tempBiwa')->values()->all();

        // $standard = Pump::take(1)->first();
        return view('price', compact('house', 'pumps'));
        // , compact('standard', 'house'));
    }
    // public function temp($standard2){

    // }
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
            $pumps[$n]->tempBiwa = -50;
            $find = false;
            
            if($find == false){
                //skracam do +7 temp
                for ($i = 0; $i<=4; $i++){
                    if($i<4){
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
                                    $pumps[$n]->biwa = $chart[$i]+$j; 
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
            $temp = 0;
            for ($i=0; $i<$pumps->count();$i++){
                
                if (($pumps[$i]->price) <= ($pumps[$temp]->price)){
                    $temp = $i;
                }
                $spumps = $pumps[$temp];    
            }
        }
        return $pumps;
    }
}
