<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Helpdesk extends Model
{
    protected $table = 'helpdesk';
    
    protected $fillable = [
        'nama_lengkap',
        'email',
        'subjek',
        'pesan'
    ];
}