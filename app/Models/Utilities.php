<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilities extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'pic_pagi',
        'pic_malam',
        'jam_input_pagi',
        'jam_input_malam',
        'pagi',
        'malam',
        'pemakaian',
        'keterangan',
        'user_id'
    ];
}
