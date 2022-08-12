<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pump;
use App\Models\House;

class PriceController extends Controller
{
    public function show(Request $request){

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

        $standard = Pump::where('category_id',2)->get();
        $basic = Pump::where('category_id', 3)->get();
        $pro = Pump::where('category_id', 1)->get();

        $array = $this->pumps($basic, $house);
        $basic = $array[0];
        $basicOffer = $array[1];

        $array = $this->pumps($standard, $house);
        $standard = $array[0];
        $standardOffer = $array[1];

        $array = $this->pumps($pro, $house);
        $pro = $array[0];
        $proOffer = $array[1];
        // dd($standard, $standardOffer);
        // $temp = 0;
        // $standard = $standard->sortByDesc('tempBiwa')->values();
        // for ($i=0; $i<count($standard);$i++){
        //     if ($standard[$i]->odleglosc <= $standard[$temp]->odleglosc){
        //         $temp = $i;
        //     }
        // }
        

        // $basic = $this->pumps($basic, $house);
        // $temp = 0;
        // $basic = $basic->sortByDesc('tempBiwa')->values();
        // for ($i=0; $i<count($basic);$i++){
        //     if ($basic[$i]->odleglosc <= $basic[$temp]->odleglosc){
        //         $temp = $i;
        //     }            
        // }
        // $basicOffer = $temp;

        // $pro = $this->pumps($pro, $house);
        // $temp = 0;
        // $pro = $pro->sortByDesc('tempBiwa')->values();
        // for ($i=0; $i<count($pro);$i++){
        //         if ($pro[$i]->odleglosc <= $pro[$temp]->odleglosc){
        //             $temp = $i;
        //         }
        // }
        // $proOffer = $temp;
        return view('price', compact('house', 'basic', 'pro', 'standard', 'standardOffer', 'basicOffer', 'proOffer'));
    }

    public function pumps($pumps, $house){
        $chart = [-20, -15, -7, 2, 7, 10, 12, 20];
        $h = 'heat'.$house->temp;
        for($n=0;$n<$pumps->count();$n++){
            $array = [
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
            //zastanawiam się
            if ($house->heatDemand < $pumps[$n]->$h->m20){
                $pumps[$n]->tempBiwa = -25;
                $pumps[$n]->odleglosc = (abs(-7-$pumps[$n]->tempBiwa));
            } 
            if($find == false){
                //skracam do +7
                for ($i = 0; $i<=4; $i++){
                    if($i<4){
                        for($j = 0;$j<abs($chart[$i+1]-$chart[$i]);$j++){
                            $heat = ($house->heatDemand/40)*abs(($chart[$i]+$j)-20);
                            $pump = $array[$i] + ($j)*($array[$i+1] - $array[$i])/abs($chart[$i+1]-$chart[$i]);
                                if ($pump <= $heat){
                                    $pumps[$n]->tempBiwa = $chart[$i]+$j;
                                    $pumps[$n]->odleglosc = (abs(-7-$pumps[$n]->tempBiwa));
                                }
                                else {
                                    $find = true;
                                }
                        }
                    }               
                }
            }
        }
        $temp = 0;
        $pumps = $pumps->sortByDesc('tempBiwa')->values();
        for ($i=0; $i<count($pumps);$i++){
            if ($pumps[$i]->odleglosc <= $pumps[$temp]->odleglosc){
                $temp = $i;
            }
        }
        $pumpOffer = $temp;
        $array = [$pumps, $pumpOffer];
        return $array;
    }
}
