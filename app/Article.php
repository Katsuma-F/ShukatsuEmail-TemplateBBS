<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'favorites')->withTimestamps();
    }

    public function isFavoritedBy(?User $user): bool
    {
        return $user
            ? (bool)$this->favorites->where('id', $user->id)->count()
            : false;
    }
}
