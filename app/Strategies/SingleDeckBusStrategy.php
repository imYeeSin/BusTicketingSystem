<?php
namespace App\Strategies;

// Name: Cho Yee Sin

use App\Models\Bus;

class SingleDeckBusStrategy implements BusTypeStrategy {

    public function setBusType(Bus $bus) {
        $bus->busType = ('Single Deck Bus');
    }

    public function getBusType() {
        return 'Single Deck Bus';
    }

    public function setSeat(Bus $bus) {
        $bus->seat = 27;
    }

    public function getSeat() {
        return 27;
    }

}
