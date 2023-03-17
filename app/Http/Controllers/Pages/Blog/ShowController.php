<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages\Blog;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class ShowController
{
    public function __invoke(Request $request, Post $post): View
    {
        return view('pages.blog.show', [
            'post' => $post,
        ]);
    }
}
