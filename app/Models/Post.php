<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'published_at',
    ];


    public function author()
    {
       return $this->belongsTo(User::class,'user_id');
    }

    public function isPublished():bool
    {
     return $this->published_at == null;
    }


    public function scopePopular($query)
    {
        return $query->where('user_id',auth()->id());
    }
}
