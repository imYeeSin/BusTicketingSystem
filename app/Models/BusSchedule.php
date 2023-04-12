<?php
namespace App\Models;

// Name: Cho Yee Sin

use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    protected $table = 'bus_schedules';
    protected $primaryKey = 'id';
    protected $fillable = ['departureTime', 'arrivalTime', 'pickUpPoint', 'dropOffPoint', 'stopPoint', 'Bus_ID', 'Driver_ID', 'price'];
}
