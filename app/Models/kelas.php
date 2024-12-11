<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan
    protected $table = 'kelas';

    // Method untuk mengambil semua data kelas
    public function getKelas()
    {
        return $this->all();
    }
}
