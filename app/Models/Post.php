<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'image',
        'content'
    ];

    public function posts(){
        return $this->belongsTo(User::class);
    }
}
