<?php

namespace SDenizhan\Blog;

use Filament\Contracts\Plugin;
use Filament\Facades\Filament;
use Filament\Panel;
use SDenizhan\Blog\Filament\Resources\PostCategoryResource;
use SDenizhan\Blog\Filament\Resources\PostResource;

class BlogPlugin implements Plugin
{
    public function getId(): string
    {
        return 'blog';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        $panel->resources([
            PostCategoryResource::class,
            PostResource::class,
        ]);

        PostCategoryResource::routes($panel);
        PostResource::routes($panel);
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
