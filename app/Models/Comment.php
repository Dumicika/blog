<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable =[
        'content',
        'article_id',
        'user_id'
    ];
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
