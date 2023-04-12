<?php
namespace App\Strategies;

// Name: Cho Yee Sin

use App\Models\Bus;

interface BusTypeStrategy {
    public function setBusType(Bus $bus);
    public function setSeat(Bus $bus);
}
