<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan form create user
    public function create()
    {
        return view('create_user', [
            'kelas' => Kelas::all(),  // Mengambil semua data kelas untuk ditampilkan pada dropdown
        ]);
    }

    // Fungsi untuk menyimpan data user
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id', // Validasi kelas_id agar sesuai dengan data di tabel kelas
        ]);

        // Menyimpan data user ke dalam tabel user
        $user = UserModel::create($validatedData);

        // Memuat relasi kelas
        $user->load('kelas');

        // Mengembalikan data ke view profile dengan informasi user dan kelas
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }
}
