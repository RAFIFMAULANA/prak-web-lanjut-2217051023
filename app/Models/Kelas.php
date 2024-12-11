<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Menghindari kolom id dari mass assignment
    protected $guarded = ['id'];

    // Relasi dengan model UserModel
    public function user()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }
}
