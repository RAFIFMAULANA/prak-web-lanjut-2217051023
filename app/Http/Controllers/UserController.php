<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        // Membuat objek dari model Kelas
        $kelasModel = new Kelas();

        // Mengambil data kelas menggunakan method getKelas()
        $kelas = $kelasModel->getKelas();

        // Mengirim data kelas ke view
        $data = [
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        // Membuat objek dari model Kelas
        $kelasModel = new Kelas();

        // Mengambil data kelas menggunakan method getKelas()
        $kelas = $kelasModel->getKelas();

        // Mengirim data kelas ke view
        $data = [
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }
}
