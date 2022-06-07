<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama_siswa','nisn','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat'];
}
