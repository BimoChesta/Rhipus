<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
=======
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
<<<<<<< HEAD
        'name',
        'email',
        'password',
        'foto',
        'alamat',
        'tlp',
        'tglLahir',
        'is_active',
        'is_admin',
        'is_mamber',
=======
        'username',
        'email',
        'bio',
        'avatar',
        'password',
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
<<<<<<< HEAD
        'password' => 'hashed',
    ];
=======
    ];

    use SoftDeletes;

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}

>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
}
