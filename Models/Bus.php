<?php
namespace App\Models;


// Name: Cho Yee Sin

use Illuminate\Database\Eloquent\Model;

class Bus extends Model {
    
    protected $table = 'buses';
    protected $primaryKey = 'id';
    protected $fillable = ['plateNumber', 'model', 'purchaseDate', 'roadTaxExpirationDate', 'busType', 'seat'];
    protected $busType;
    protected $seat;
    
    
    public function getBusType() {
        return $this->busType;
    }

    public function getSeat() {
        return $this->seat;
    }

}
