<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id', 'category_id', 'title', 'content',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
