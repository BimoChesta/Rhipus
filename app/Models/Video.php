<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'thumbnail',
        'path',
        'deskripsi',
        'link_toko',
        'view_count',
        // 'jumlah_suka',
        // 'hari_upload',
    ];
    protected $table="table_video";
    //protected $primaryKey="";

    use SoftDeletes;

    public function user()
    {
<<<<<<< HEAD
        return $this->belongsTo(User::class, 'user_id');
    }

=======
        return $this->belongsTo(User::class);
    }
    
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
}
