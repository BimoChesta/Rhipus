<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class daftarController extends Controller
{
    public function index (){
        return view('daftar');
    }

    // Fungsi untuk melakukan proses registrasi
    public function register(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'username' => 'required|string|max:255|unique:users', // Pastikan username unik di tabel users
                'password' => 'required|string|min:6|confirmed', // Konfirmasi password
            ]);

            // Membuat user baru
            $user = User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password), // Enkripsi password
            ]);

            // Otomatis login setelah registrasi
            Auth::login($user);

            return redirect()->intended('/'); // Redirect ke halaman yang diinginkan

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Menangkap error validasi dan mengembalikan ke form dengan pesan error
            return redirect()->back()
                ->withErrors($e->validator) // Mengirimkan error validasi
                ->withInput($request->all()); // Mengembalikan input sebelumnya

        } catch (\Exception $e) {
            // Menangkap semua error lainnya (termasuk database error, dll.)
            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat proses registrasi. Coba lagi nanti.']) // Pesan error umum
                ->withInput($request->all()); // Mengembalikan input sebelumnya
        }
    }


    // public function store(Request $request){
    //     $data=$request->all();


    //     daftar::insert($data);
    //     return redirect('/daftar');


    // }
}
