<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';

    protected $fillable = [
        'user_id',
        'jam_masuk',
        'jam_keluar',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
