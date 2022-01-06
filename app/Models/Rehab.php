<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehab extends Model
{
    // use HasFactory;

    protected $table = "rehab";
    protected $primaryKey = "id";
    protected $fillable = [
        'periode',
        'tap',
        'evi',
    ];
}
