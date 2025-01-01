<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;

    protected $table = 'beranda'; // Nama tabel di database
    protected $fillable = ['username', 'avatar', 'bio', 'user_id']; // Pastikan kolom ini ada
}
