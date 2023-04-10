<?php

// Name: Cho Yee Sin

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    protected $table = 'bus_schedules';
    protected $primaryKey = 'id';
    protected $fillable = ['departureTime', 'arrivalTime', 'pickUpPoint', 'dropOffPoint', 'stopPoint', 'Bus_ID', 'Driver_ID', 'price'];
}
