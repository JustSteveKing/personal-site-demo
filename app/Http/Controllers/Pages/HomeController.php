<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class HomeController
{
    public function __invoke(Request $request): View
    {
        return view('pages.home', [
            'message' => 'I do stuff with PHP and APIs',
            'posts' => Post::query()
                ->where('published', true)
                ->latest()
                ->limit(6)
                ->get(),
        ]);
    }
}
