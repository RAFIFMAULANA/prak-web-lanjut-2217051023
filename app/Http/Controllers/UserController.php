<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan halaman edit user
    public function edit($id)
    {
        // Ambil data user berdasarkan ID
        $user = UserModel::findOrFail($id);

        // Kirim data user ke view edit_user
        return view('edit_user', [
            'user' => $user,
        ]);
    }

    // Fungsi untuk mengupdate data user
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        // Cari user berdasarkan ID dan update data
        $user = UserModel::findOrFail($id);
        $user->update($validatedData);

        // Redirect ke halaman list user atau halaman sukses
        return redirect()->route('user.list')->with('success', 'Data user berhasil diperbarui!');
    }
}
