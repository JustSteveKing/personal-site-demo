<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'published',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];
}
