<?php
namespace App\Strategies;

// Name: Cho Yee Sin

use App\Models\Bus;

class DoubleDeckBusStrategy implements BusTypeStrategy {

    public function setBusType(Bus $bus) {
        $bus->busType = 'Double Deck Bus';
    }
    
    public function getBusType() {
        return 'Double Deck Bus';
    }
    
    public function setSeat(Bus $bus) {
        $bus->seat = 45;
    }

    public function getSeat() {
        return 45;
    }

}
