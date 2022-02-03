<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentReports extends Model
{
    use HasFactory;
    protected $table = 'incident_report';
    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'establishment',
        'establishment_address',
        'contact_name',
        'tel_no',
        'incident_date_time',
        'purpose_of_use',
        'trailer_attached',
        'accident_road_town_name',
        'accident_description',
        'vehicle_speed',
        'nearest_of_road',
        'incident_position',
        'road_state',
        'weather',
        'driver_warning',
        'driver_warning_details',
        'no_of_persons',
        'witness_details',
        'police_involvement',
        'police_involvement_details',
        'vehicle_damage',
       
        // add all other fields
    ];
}
