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
        //$data['heatDemandM15'] = ($data['heatDemand']/40)*35+$data['cwu'];
        //$data['heatDemandM7'] = ($data['heatDemand']/40)*27;
        //$data['heatDemandP2'] = ($data['heatDemand']/40)*18;
         $data['heatDemandM15'] = ($data['heatDemand']/40)*35+$data['cwu'];
         $data['heatDemandM7'] = ($data['heatDemand']/40)*27+$data['cwu'];
         $data['heatDemandP2'] = ($data['heatDemand']/40)*18+$data['cwu'];
         $data['heatDemand'] = $data['surface']*$data['type']/1000 + $data['cwu'];
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

        $basic = $this->pumps($basic, $house);
        $temp = 0;
        for ($i=0; $i<$basic->count();$i++){     
                if ($basic[$i]->odleglosc <= $basic[$temp]->odleglosc){
                    $temp = $i;
                }
        }
        // $basic[$temp]->offer = $temp;
        $basic = $basic->sortByDesc('tempBiwa')->values()->all();
        

        $standard = $this->pumps($standard, $house);
        $temp = 0;
        for ($i=0; $i<$standard->count();$i++){
            if ($standard[$i]->tempBiwa != -50){
                if (abs(-7-$standard[$i]->tempBiwa) <= abs(-7-$standard[$temp]->tempBiwa)){
                    $temp = $i;
                }
            }  
        }
        $standard[$temp]->offer = "Polecana!";
        $standard = $standard->sortByDesc('tempBiwa')->values()->all();

        $pro = $this->pumps($pro, $house);
        $temp = 0;
        for ($i=0; $i<$pro->count();$i++){
            if ($pro[$i]->tempBiwa != -50){
                if (abs(-7-$pro[$i]->tempBiwa) <= abs(-7-$pro[$temp]->tempBiwa)){
                    $temp = $i;
                }
            }  
        }
        // $pro[$temp]->offer = "Polecana!";
        $pro = $pro->sortByDesc('tempBiwa')->values()->all();
        $basic = [];
        $pro = [];

        return view('house.show', compact('house','basic', 'standard','pro', 'chartHouse', 'temp'));
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
