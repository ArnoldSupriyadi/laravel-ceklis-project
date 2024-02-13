<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersiapanBahan extends Model
{
    use HasFactory;

    protected $table = 'persiapan_bahans';

    protected $fillable = [];

    protected $casts = [
        'name' => 'json',
        'checklist' => 'json',
    ];
}
