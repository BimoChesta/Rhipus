<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Video;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Exceptions\PostTooLargeException;

class videoController extends Controller
{
    public function index(Request $request)
    {
        // Ambil keyword dari input
        $keyword = $request->input('keyword');

        // Jika ada keyword, lakukan pencarian; jika tidak, ambil semua produk
        $query = Video::query();
        if ($keyword) {
            $query->where('judul', 'LIKE', "%{$keyword}%");
                // ->orWhere('description', 'LIKE', "%{$keyword}%");
        }

        // Ambil data dari database
        $videos = $query->get();

        return view('beranda', compact('videos'));

        $videos = $query->get();

        return view('videoShow', compact('videos'));
        // Kirim data ke view
        // return view('beranda', [
            // 'products' => $results,
            // 'keyword' => $keyword,
        // ]);
        // $videos = Video::with('user')->get(); // Mengambil semua video beserta user-nya
    // return view('beranda', compact('videos'));


    }

    public function show($id)
{
    $video = Video::find($id);
    $user = User::find($video->user_id);

    if (!$video) {
        return redirect()->route('videos.index')->with('error', 'Video tidak ditemukan.');
    }
    return view('videoShow', compact('video', 'user'));

}


    public function yourMethod(Request $request){
        try {
            // Logika Anda di sini
        } catch (PostTooLargeException $e) {
            return response()->json(['error' => 'File terlalu besar. Maksimal ukuran file adalah 50MB.'], 413);
        }
    }


    public function incrementViewCount($id)
{
    $video = Video::findOrFail($id);
    $video->increment('view_count');
    return response()->json(['view_count' => $video->view_count]);
}



    public function unggah()
    {
        return view('unggah');
    }



    public function unggahVideo(Request $request)
{
    try {
        // Validasi video
        $validatedData = $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:90000',
            'judul' => 'required|string|max:50',
            'thumbnail' => 'required',
            'deskripsi' => 'string',
            'link_toko' => 'required',
        ]);

        // Simpan file video ke folder public/videos
        $videoPath = null;
    if ($request->hasFile('video')) {
    $video = $request->file('video');
    $videoPath = 'storage/videos/' . $video->getClientOriginalName();
    $video->move(public_path('storage/videos'), $video->getClientOriginalName());
    }

        // Simpan file thumbnail ke folder public/thumbnail
        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = 'storage/thumbnail/' . $thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('storage/thumbnail'), $thumbnail->getClientOriginalName());
        }

        // Simpan data ke database
        $video = new Video();
        $video->path = $videoPath;
        $video->judul = $validatedData['judul'];
        $video->thumbnail = $thumbnailPath;
        $video->user_id = Auth::id();
        $video->deskripsi = $validatedData['deskripsi'];
        $video->link_toko = $validatedData['link_toko'];
        $video->save();

        return redirect('/profil')->with('success', 'Video has been uploaded successfully!');
    } catch (Exception $e) {
        // Log error untuk debugging
        Log::error('Error uploading video: ' . $e->getMessage());

        // Tampilkan pesan error ke user
        return redirect()->back()->with('error', 'An error occurred while uploading video. Please try again.');
    }



}


}
