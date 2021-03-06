<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    // use HasFactory;

    protected $table = "laporan";
    protected $primaryKey = "id";
    protected $fillable = [
        'notik',
        'assign',
        'nama',
        'site',
        'snap',
        'snont',
        'cp',
        'st',
        'lokasi',
        'status',
        'ttt',
        'ket',
    ];
}
