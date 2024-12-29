<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'image'
    ];
}
