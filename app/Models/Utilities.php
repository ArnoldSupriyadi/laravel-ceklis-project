<?php

namespace App\Models;

use App\Observers\RecordObserver;
use App\Observers\UtilitesObserver;
use App\Observers\UtilitiesObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilities extends Model
{
    use HasFactory;
    
    protected static function boot()
    {
        parent::boot();
        Utilities::observe(UtilitiesObserver::class);
    }


    protected $fillable = [
        'user',
        'pic_pagi',
        'pic_malam',
        'jam_input_pagi',
        'jam_input_malam',
        'air_pagi',
        'air_malam',
        'pemakaian_air',
        'gas_pagi',
        'gas_malam',
        'pemakaian_gas',
        'listrik_pagi',
        'listrik_malam',
        'pemakaian_listrik',
        'keterangan',
        'user_id'
    ];
}
