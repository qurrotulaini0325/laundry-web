<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ambil_layanan_satuan extends Model
{
    use HasFactory;
    protected $table = 'layanan_satuan';
    protected $fillable = [
        'Tipe',
        'Regular',
        'One_Day',
        'Express',
        'Quick',
        
    ];
    public $timestamps = false;
}
