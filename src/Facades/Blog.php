<?php

namespace SDenizhan\Blog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SDenizhan\Blog\Blog
 */
class Blog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SDenizhan\Blog\Blog::class;
    }
}
