<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosBiaya extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'keterangan',
    ];

    protected $table = 'pos_biaya';

    public $timestamp = false;
}
