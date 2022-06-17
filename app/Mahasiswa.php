<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa388';

    protected $fillable = [
    'nim', 'nama', 'gender', 'jurusan', 'bid_minat'
    ];
}
