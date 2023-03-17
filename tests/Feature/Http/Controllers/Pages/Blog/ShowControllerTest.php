<?php

declare(strict_types=1);

use App\Http\Controllers\Pages\Blog\ShowController;
use App\Models\Post;
use JustSteveKing\StatusCode\Http;
use function Pest\Laravel\get;

it('returns a not found exception if the post does not exist', function (): void {
    get(
        uri: action(ShowController::class, 1234),
    )->assertStatus(
        status: Http::NOT_FOUND->value
    );
});

it('loads the page when there is a post', function (): void {
    $post = Post::factory()->create();

    get(
        uri: action(ShowController::class, $post->id),
    )->assertStatus(
        status: Http::OK->value
    );
});

it('loads the correct view', function (): void {
    $post = Post::factory()->create();

    get(
        uri: action(ShowController::class, $post->id),
    )->assertStatus(
        status: Http::OK->value
    )->assertViewIs(
        value: 'pages.blog.show',
    );
});

it('passes the blog post down to the view', function (): void {
    $post = Post::factory()->create();

    get(
        uri: action(ShowController::class, $post->id),
    )->assertStatus(
        status: Http::OK->value
    )->assertViewIs(
        value: 'pages.blog.show',
    )->assertSeeText(
        value: $post->title,
    )->assertViewHas(
        key: ['post']
    );
});
