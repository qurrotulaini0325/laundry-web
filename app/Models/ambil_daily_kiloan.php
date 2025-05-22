<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ambil_daily_kiloan extends Model
{
    use HasFactory;
    protected $table = 'daily_kiloan'; //untuk memberi tahu bahwa kita menggunakan table bernama x, bukan Product (nama models).
    protected $fillable = [
        'Layanan',
        'Regular',
        'One_Day',
        'Express',
        'Quick',
    ];
    
    public $timestamps = false;
}
