<?php

namespace App\Observers;

use App\Models\Record;
use App\Models\Utilities;

class UtilitiesObserver
{
    public function saving(Utilities $record)
    {
        $sum_air = $record->air_pagi + $record->air_malam;
        $sum_gas = $record->gas_pagi + $record->gas_malam;
        $sum_listrik = $record->listrik_pagi + $record->listrik_malam;

        $record->pemakaian_air = $sum_air;
        $record->pemakaian_gas = $sum_gas;
        $record->pemakaian_listrik = $sum_listrik;
    }
}
