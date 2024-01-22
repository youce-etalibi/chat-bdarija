<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

use App\Models\Compte;

class Post extends Model
{
    use HasFactory;

    use softDeletes;

    protected $fillable = ['body', 'images', 'account_id', 'likes'];

    public function compte()
    {
        return $this->belongsTo(Compte::class, 'account_id');
    }

    public function likes()
    {
        return $this->belongsToMany(Compte::class, 'post_likes');
    }

}
