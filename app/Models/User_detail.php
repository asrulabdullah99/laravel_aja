<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_detail extends Model
{
    use HasFactory;

    protected $table = 'user_detail';

    protected $fillable = [
        'user_id',
        'jam_masuk',
        'jam_keluar',
        'status',
    ];
}
