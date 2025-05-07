<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ambil_layanan_satuan extends Model
{
    use HasFactory;
    protected $table = 'layanan_satuan'; //untuk memberi tahu bahwa kita menggunakan table bernama x, bukan Product (nama models).
    public $timestamps = false;
}
