<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datek extends Model
{
    // use HasFactory;

    protected $table = "datek";
    protected $primaryKey = "id";
    protected $fillable = [
        'sn',
        'mac',
        'sto',
        'log',
        'ap',
        'alamat',
        'ont',
        'lokasi',
        'olt',
        'gpon',
        'onu',
        'vlan',
        'status',
        'odp',
    ];
}
