<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = (object) [
            'nama' => 'Andra',
            'nim' => '102022300348',
            'email' => 'andrawira@student.telkomuniversity.ac.id',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Rekayasa Industri',
            'foto' => 'image/foto.png',

        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
