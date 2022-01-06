<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olo extends Model
{
    // use HasFactory;

    protected $table = "olo";
    protected $primaryKey = "id";
    protected $fillable = [
        'notic',
        'ts',
        'tc',
        'cust',
        'nid',
        'sid',
        'xid',
        'jin',
        'bw',
        'alamat',
        'long',
        'lat',
        'nte',
        'type',
        'product',
        'jla',
        'sto',
        'metro',
        'portm',
        'olt',
        'portl',
        'odp',
        'ont',
        'portn',
        'sn',
        'vlan',
        'oa',
        'ket',
    ];
}
