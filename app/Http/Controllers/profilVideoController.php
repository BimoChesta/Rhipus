<?php

namespace App\Http\Controllers;
use App\Models\Video;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profilVideoController extends Controller
{
    public function index(){
        $videos = Video::where('user_id', Auth::id())->get();
        return view ('profilVideo', ['videos' => $videos]);
    }
    public function create(){
        return view('profilVideo');

    }

    public function show($id)
    {
        $user = User::with('videos')->findOrFail($id); // Ambil user dengan video mereka
        return view('profile.show', compact('user'));
    }


public function update(Request $request)
{
    // Mengambil data pengguna yang sedang login berdasarkan ID
    $user = User::find(Auth::id());  // Lebih eksplisit menggunakan find()

    // Pastikan pengguna ditemukan
    if (!$user) {
        return redirect()->route('profile.show')->with('error', 'Pengguna tidak ditemukan');
    }

    // Validasi input
    $request->validate([
        'username' => 'required|string|max:255',
        'bio' => 'nullable|string|max:500',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ukuran max 2MB
    ]);

}


}
