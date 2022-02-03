<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IncidentReports;
use App\Rules\CheckCustomRequiredRule;
class IncidentReportController extends Controller
{
    //
	public function incidentreport(Request $request){
	    

	     $validate = $request->validate([
	        'vehicle_id' => 'required|string',
	        'driver_id' => 'required|string',
	        'establishment' => 'required|string',
	        'establishment_address' => 'required|string',
	        'contact_name' => 'required|string',
	        'tel_no' => 'required|string',
	        'incident_date_time' => 'required|string',
	        'purpose_of_use' => 'required|string',
	        'trailer_attached' => 'required|string',
	        'accident_road_town_name' => 'required|string',
	        'accident_description' => 'required|string',
	        'vehicle_speed' => 'required|string',
	        'nearest_of_road' => 'required|string',
	        // 'incident_position' => 'required|string',
	        'road_state' => 'required|string',
	        'weather' => 'required|string',
	        'driver_warning' => 'required|string',
	        // 'driver_warning_details' => 'required|string',
	        'no_of_persons' => 'required|string',
	        'witness_details' => 'required|string',
	        'police_involvement' => 'required|string',
	        // 'police_involvement_details' => 'required|string',
	        'vehicle_damage' => 'required|string',
	    ]);
	    $IncidentReports = IncidentReports::create($request->all());

	    if( $IncidentReports){
	        $response = [
	            'code' => 200,
	            'message' => 'Incident report added Successfully',
	            
	        ];
	    }else{
	        $response = [
	            'code' => 401,
	            'message' => 'Error occurs while adding incident report. Please contact tech support',
	            // 'data' => $driver,
	            // 'AppToken' => $token
	        ];
	    }    
	    return response($response,200);
	}
}
