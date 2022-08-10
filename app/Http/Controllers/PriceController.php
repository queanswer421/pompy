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
        $house['heatDemand'] = $house['surface']*$house['type']/1000+$house['cwu'];
        $house['heatDemandM15'] = ($house['heatDemand']/40)*35;
        $house['heatDemandM7'] = ($house['heatDemand']/40)*27;
        $house['heatDemandP2'] = ($house['heatDemand']/40)*18;
        // $house['heatDemand'] = $house['surface']*$house['type']/1000+$house['cwu'];

        $standard = Pump::where('category_id',2)->get();
        $basic = Pump::where('category_id', 3)->get();
        $pro = Pump::where('category_id', 1)->get();
        // for($n=0;$n<$standard->count();$n++){
        //     // echo $pumps[$n]->model."<br>";
        //     $array = [
        //         $standard[$n]->heat35->m20,
        //         $standard[$n]->heat35->m15,
        //         $standard[$n]->heat35->m7,
        //         $standard[$n]->heat35->p2,
        //         $standard[$n]->heat35->p7,
        //         $standard[$n]->heat35->p10,
        //         $standard[$n]->heat35->p12,
        //         $standard[$n]->heat35->p20
        //     ];
        //     // echo $array[2]."<br>";
        // }


        // dd($standard[0]->tempbiwa);
        // $standard = $this->pumps($standardowe, $house);

        // $standard = $this->temp($standardowe);


        // $standard[$temp]->offer = "Polecana!";
        // $standard = $standard->sortByDesc('tempBiwa')->values()->all();
            // dd($house);
        // $standard = Pump::take(1)->first();
        $standard = $this->pumps($standard, $house);
        for ($i=0; $i<$standard->count();$i++){
            $temp = 0;
            // echo "<br>".$standard[$i]->tempBiwa." " .abs(-7-$standard[$i]->tempBiwa);
            // $temp = $standard[0]->tempBiwa;

            if ($standard[$i]->tempBiwa != -50){
                if (abs(-7-$standard[$i]->tempBiwa) <= abs(-7-$standard[$temp]->tempBiwa)){
                    $temp = $i;
                }
            }  
            
        }
        $standard = $standard->sortByDesc('tempBiwa')->values()->all();

        $standardOffer = $temp;
        $basicOffer = 0;
        $proOffer = 0;
        return view('price', compact('house', 'basic', 'pro', 'standard', 'standardOffer', 'basicOffer', 'proOffer'));
    }

    public function pumps($pumps, $house){
        $chart = [-20, -15, -7, 2, 7, 10, 12, 20];
        $h = 'heat'.$house->temp;
        for($n=0;$n<$pumps->count();$n++){
            $array35 = [
                $pumps[$n]->$h->m20,
                $pumps[$n]->$h->m15,
                $pumps[$n]->$h->m7,
                $pumps[$n]->$h->p2,
                $pumps[$n]->$h->p7,
                $pumps[$n]->$h->p10,
                $pumps[$n]->$h->p12,
                $pumps[$n]->$h->p20
            ];
            
            $find = false;
            
            if($find == false){
                //skracam do +7
                for ($i = 0; $i<=4; $i++){
                    if($i<4){
                        for($j = 0;$j<abs($chart[$i+1]-$chart[$i]);$j++){
                            $heat = ($house->heatDemand/40)*abs(($chart[$i]+$j)-20);
                            $pump = $array35[$i] + ($j)*($array35[$i+1] - $array35[$i])/abs($chart[$i+1]-$chart[$i]);
                                if ($pump <= $heat){
                                    $pumps[$n]->tempBiwa = $chart[$i]+$j; 
                                }
                                else {
                                    $find = true;
                                }
                        }
                    }               
                }
            }
        }
        return $pumps;
    }
}
