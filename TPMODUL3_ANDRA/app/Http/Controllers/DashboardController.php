<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        // - Buat variabel nama, jam, waktu
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        // - Panggil fungsi getTanggal()
        // - Kirim data ke view 'dashboard'
        date_default_timezone_set('Asia/Jakarta');

        $name = "Avanindra Wira Wicaksana";
        $jam = date("H");
        $time = date("H:i");

        if ( $jam >= 0 && $jam < 11 ) {
            $salam = "Selamat Pagi";
        }   elseif ( $jam >= 11 && $jam < 15 ) {
            $salam = "Selamat Siang";
        }   elseif ( $jam >= 15 && $jam < 18 ) {
            $salam = "Selamat Sore";
        }   else {
            $salam = "Selamat Malam";
        }

        $tanggal = $this->getTanggal();

        return view("Dashboard", compact('name','time','salam','tanggal'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date("d-m-Y");
    }
}
