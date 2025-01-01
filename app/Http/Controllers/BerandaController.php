<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video; // Contoh jika Anda ingin menampilkan video di beranda
use App\Models\User; // Jika Anda ingin menampilkan informasi pengguna

class BerandaController extends Controller
{
    public function index()
    {
        // Ambil data yang diperlukan untuk halaman beranda
        $videos = Video::latest()->take(5)->get(); // Ambil 5 video terbaru
        $users = User::all(); // Ambil semua pengguna (sesuaikan dengan kebutuhan)

        // Kirim data ke view beranda
        return view('beranda', compact('videos', 'users'));
    }
}