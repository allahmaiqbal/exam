<?php

namespace App\Models;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /*  === Start Relation Ship  ===  */

    /*  === Local Scope start  ===  */

    public function scopePopular(Builder $query): Builder
    {
        return $query->where('user_id', auth()->id());
    }

    /* === route key model === */
    public function getRouteKeyName()
    {
        return 'slug';
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
        return $this->published_at !== null;
    }

    /*  **===** All Custom Method **===**  */
}
