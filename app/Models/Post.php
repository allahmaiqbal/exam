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

    /*  === Start Relation Ship  ===  */

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /*  === Start Relation Ship  ===  */

    /*  === Local Scope start  ===  */

    public function scopePopular($query)
    {
        return $query->where('user_id', auth()->id());
    }

    /*  === Local Scope end  ===  */

    /*  **===** All Custom Method **===**  */

    /**
     * Undocumented function
     * cheeck published is not
     * @return boolean
     */

    public function isPublished(): bool
    {
        return $this->published_at == null;
    }

    /* === route key model === */
     public function getRouteKeyName()
    {
        return 'slug';
    }

    /*  **===** All Custom Method **===**  */

}
