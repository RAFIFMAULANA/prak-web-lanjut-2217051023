<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan form create user
    public function create()
    {
        return view('create_user'); // Menampilkan form create_user.blade.php
    }

    // Fungsi untuk menangani data yang dikirim melalui form
    public function store(Request $request)
    {
        // Ambil data dari formulir
        $data = [
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas' => $request->input('kelas'),
        ];

        // Kirimkan data ke view profile
        return view('profile', $data); // Menampilkan data di halaman profile
    }
}
