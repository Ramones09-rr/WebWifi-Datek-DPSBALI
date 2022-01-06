<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datin extends Model
{
    // use HasFactory;

    protected $table = "datin";
    protected $primaryKey = "id";
    protected $fillable = [
        'th',
        'am',
        'segmen',
        'sub',
        'cust',
        'project',
        'produk',
        'qty',
        'satuan',
        'otc',
        'rec',
        'tk',
        'sca',
        'jml',
        'bln',
        'bill',
        'status',
        'level',
        'progress',
        'ko',
        'nks',
        'channel',
        'divre',
        'witel',
        'mitra',
        'masa',
        'ket',
    ];
}
