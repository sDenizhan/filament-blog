<?php

namespace SDenizhan\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{
    use SoftDeletes;

    public $casts = [
        'data' => 'array',
        'seo' => 'array',
    ];
}
