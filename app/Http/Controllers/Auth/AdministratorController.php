<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Administrator;

class AdministratorController extends Controller
{
    public function dashboard(){
        $data = [
            [
            'id'=> 1,
            'icon' => "mdi-sun-thermometer",
            'title' => "Pompy",
            'count' => \App\Models\Pump::all()->count()
            ],
            [
                'id' => 2,
                'icon' => "mdi-home-city",
                'title' => "Firmy",
                'count' => \App\Models\Company::all()->count()
            ],
            [
                'id' => 3,
                'icon' => "mdi-account-outline",
                'title' => "Pracownicy",
                'count' => \App\Models\Employer::all()->count()
            ],
            [
                'id' => 4,
                'icon' => "mdi-cog",
                'title' => "Producenci",
                'count' => \App\Models\Producer::all()->count()
            ]
        ];
    
            return $data;
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = new Administrator();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()){
            return response()->json([
                'message' => 'User created successfully'
            ], 201);
        } else {
            return response()->json([
                'message' => 'Some errorr occurred, Please try again',
                'status_code' => 500
            ], 500);
        }
    }
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()->all()]);
        }

        if(auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){

            // config(['auth.guards.api.provider' => 'admin']);
            
            $admin = Administrator::select('administrators.*')->find(auth()->guard('admin')->user()->id);
            $success =  $admin;
            $success['type'] = 'administrator';
            $success['token'] =  $admin->createToken('MyAdministrator',['admin'])->accessToken; 

            return response()->json($success, 200);
        }else{ 
            return response()->json(['error' => ['Email and Password are Wrong.']], 200);
        }
    }
    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Logout successfully',
            'status_code' => 200
        ], 200);
    }
    public function employers(){
        return \App\Models\Employer::all();
    }
    public function managers(){
        return \App\Models\Manager::all();
    }
}
