<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Manager;

class ManagerController extends Controller
{
    public function dashboard()
    {
        return "Manager Dashboard";
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = new Manager();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()){
            return response()->json([
                'message' => 'Manager created successfully'
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
        config(['auth.guards.manager-api.driver' => 'session']);

        if(auth()->guard('manager-api')->attempt(['email' => request('email'), 'password' => request('password')])){

            // config(['auth.guards.api.provider' => 'manager']);
                        
            $manager = Manager::select('managers.*')->find(auth()->guard('manager-api')->user()->id);
            $success =  $manager;
            $success['type'] = 'manager';
            $success['token'] =  $manager->createToken('MyManager',['manager'])->accessToken; 

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
    public function employers()
    {
        return \App\Models\Employer::all();
    }
}
