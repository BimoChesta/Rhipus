<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\Beranda;
=======
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
use App\Models\Video;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profilController extends Controller
{
    public function index(){
        $videos = Video::where('user_id', Auth::id())->get();
        return view ('profil', ['videos' => $videos]);
    }
    public function create(){
        return view('profil');

    }

    public function show()
    {
<<<<<<< HEAD
        $user = Beranda::where('user_id', Auth::id())->first(); // Mengambil data pengguna dari tabel beranda
        return view('editProfil', ['user' => $user]);
=======
        return view('editProfil', ['user' => Auth::user()]);
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
    }


public function update(Request $request)
{
<<<<<<< HEAD
    // Mengambil data pengguna dari tabel beranda
    $user = Beranda::where('user_id', Auth::id())->first(); // Mengambil data pengguna dari tabel beranda
=======
    // Mengambil data pengguna yang sedang login berdasarkan ID
    $user = User::find(Auth::id());  // Lebih eksplisit menggunakan find()
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a

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

    // Mengupdate username dan bio
    $user->username = $request->input('username');
    $user->bio = $request->input('bio');

    // Mengupdate avatar jika ada file baru yang diunggah
    if ($request->hasFile('avatar')) {
        // Hapus avatar lama jika ada
        if ($user->avatar) {
            $existingAvatarPath = public_path('storage/avatar/' . $user->avatar);
            if (file_exists($existingAvatarPath)) {
                unlink($existingAvatarPath); // Hapus file avatar lama
            }
        }

        // Menyimpan file avatar baru
        $avatarPath = null;
        $avatar = $request->file('avatar');
        $avatarPath = 'storage/avatar/' . $avatar->getClientOriginalName(); // Nama file unik
        $avatar->move(public_path('storage/avatar'), $avatar->getClientOriginalName()); // Pindahkan file ke folder public/storage/avatar

<<<<<<< HEAD
=======

>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
        // Simpan nama file di database
        $user->avatar = $avatarPath;
    }

    // Simpan perubahan di database
    $user->save();

    // Redirect dengan pesan sukses
    return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui');
}

<<<<<<< HEAD
}
=======

}
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
