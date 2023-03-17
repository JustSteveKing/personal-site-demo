<?php

declare(strict_types=1);

use App\Http\Controllers\Pages\HomeController;
use JustSteveKing\StatusCode\Http;

use function Pest\Laravel\get;

it('can load the home page', function (): void {
    get(
        uri: action(HomeController::class),
    )->assertStatus(
        status: Http::OK->value,
    );
});

it('loads the correct view', function (): void {
    get(
        uri: action(HomeController::class),
    )->assertStatus(
        status: Http::OK->value,
    )->assertViewIs(
        value: 'pages.home',
    );
});

it('passes the message to be displayed', function (): void {
    get(
        uri: action(HomeController::class),
    )->assertStatus(
        status: Http::OK->value,
    )->assertSeeText(
        value: 'I do stuff with PHP and APIs',
    );
});
