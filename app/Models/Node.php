<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    // use HasFactory;

    protected $table = "node";
    protected $primaryKey = "id";
    protected $fillable = [
        'sname',
        'sadd',
        'sid',
        'hsn',
        'lat',
        'long',
        'akses',
        'system',
        'hsi',
        'dme',
        'oname',
        'oport',
        'ptct',
        'sn',
        'ont',
        'v2g',
        'v3g',
        'v4g',
        'portn',
        'ipo',
        'bwt',
        'oam',
        'odp',
        'remark',
        'tdes',
        'ket',
    ];
}
