<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Temperature extends Model
{
    use HasFactory;

    protected $table = 'temperatures';

    protected $fillable = [
        'user',
        'pic',
        'kesesuaian_tanggal',
        'jam_input',
        'kode_chiller',
        'suhu_chiller',
        'kode_freezer',
        'suhu_freezer',
        'kode_fryer',
        'suhu_fryer',
        'keterangan',
        'user_id'
    ];

    protected $casts = [
        'kode_chiller' => 'json',
        'suhu_chiller' => 'json',
        'kode_freezer' => 'json',
        'suhu_freezer' => 'json',
        'kode_fryer' => 'json',
        'suhu_fryer' => 'json',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
