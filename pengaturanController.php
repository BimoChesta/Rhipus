<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\models\pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pengaturanController extends Controller
{
    
    public function index(){
        return view('pengaturan');
    }
    public function delete(Request $request)
    {
        $user = User::find(Auth::id());
        if ($user) {
            // Soft delete video yang terkait dengan user
            $user->videos()->delete();  // Soft delete video
    
            // Soft delete user
            $user->delete();  // Soft delete user
        }
    
        return redirect()->route('/login'); // Redirect after deletion
    }
}
