<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;

class AuthController extends Controller
{
    //

	public function login(Request $request){
		$validate = $request->validate([
			'email' => 'bail|required|string',
			'token' => 'bail|required|string',
			'device_token' => 'bail|required|string',
		]);
		//  if($request->email == '') {
		// 	return response()->json(['code'=> '401','message' =>'Please enter email address'], 401);  
		// }
  //       if($request->token == '') {
		// 	return response()->json(['code'=> '401','message' =>'Please enter token'], 401);  
		// }
  //       if($request->device_token == '') {
		// 	return response()->json(['code'=> '401','message' =>'Please enter device token'], 401);  
		// }
		$driver = Driver::where('driver_email',$request->get('email'))->first();
		if(!$driver){
			return response([
				'code' => 401,
				'message' => 'Email or token is invalid',
			],401);
		}
		$driver['vehicle_assign'] = 'Toyota';
		$driver['shift'] = '8am to 4pm';
		if(!empty($driver['profile_img'])){
	        $file = storage_path('app/public/drivers/'.$driver['profile_img']);
	        if(file_exists($file)){
	            $driver['profile_img'] = env('APP_URL').Storage::url('app/public/drivers/'.$driver['profile_img']);
	        }
		}
		// $token = $driver->createToken('MyApp')->plainTextToken;echo $token;die();
		$driverUpdate = Driver::where('driver_email',$request->get('email'))->update(['device_token' => $request->get('device_token')]);
		$response = [
			'code' => 200,
			'message' => 'User Login Successfully',
			'data' => $driver,
			// 'AppToken' => $token
		];

		return response($response,200);

	}

}
