<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';

    protected $fillable = [
        'user_id',
        'nama_jabatan',
        'tunjangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
