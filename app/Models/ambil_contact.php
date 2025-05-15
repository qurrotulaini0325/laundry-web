<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ambil_contact extends Model
{
    use HasFactory;
    protected $table = 'contact'; //untuk memberi tahu bahwa kita menggunakan table bernama x, bukan Product (nama models).
    public $timestamps = false;
}
