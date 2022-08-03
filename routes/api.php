<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('pumps', function(){
    $house = \App\Models\House::first();
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
    $h = 'heat'.$house->temp;
    if($house->temp == 35){
        $pumps = \App\Models\Pump::with('heat35')->get();
    }
    if($house->temp == 45){
        $pumps = \App\Models\Pump::with('heat45')->get();
    }
    if($house->temp == 55){
        $pumps = \App\Models\Pump::with('heat55')->get();
    }
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
        
        if($find == false){
            //skracam do +7
            //czyli 4 pomiary
            for ($i = 0; $i<=4; $i++){
                if($i<4){
                    for($j = 0;$j<abs($chart[$i+1]-$chart[$i]);$j++){
                        $heat = ($house->heatDemand/40)*abs(($chart[$i]+$j)-20);
                        $pump = $array[$i] + ($j)*($array[$i+1] - $array[$i])/abs($chart[$i+1]-$chart[$i]);
 
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
    for ($i=0; $i<$pumps->count();$i++){
        $temp = 0;
        if (abs(-7-$pumps[$i]->tempBiwa) <= abs(-7-$pumps[$temp]->tempBiwa)){
            $temp = $i;
        }
        
    }

    $pumps[$temp]->offer = "Polecana!";
    $pumps = $pumps->sortByDesc('tempBiwa')->values()->all();
    return response()->json([$pumps,$temp]);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
