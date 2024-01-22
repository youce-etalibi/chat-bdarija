<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// use App\Models\Post;

// class Compte extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'nom',
//         'prenom',
//         'nom_utilisateur',
//         'email',
//         'date_naissance',
//         'localisation',
//         'password',
//         'bio',
//     ];


//     public function likedPosts()
//     {
//         return $this->belongsToMany(Post::class, 'post_likes');
//     }
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Post;

class Compte extends Authenticatable
{
    use HasFactory, Notifiable, softDeletes;

    protected $fillable = [
        'nom',
        'prenom',
        'nom_utilisateur',
        'email',
        'date_naissance',
        'localisation',
        'password',
        'bio',
        'remember_token', // Add this line to include the remember_token field
    ];

    // ... your existing code ...

    public function likedPosts()
    {
        return $this->belongsToMany(Post::class, 'post_likes');
    }
}
