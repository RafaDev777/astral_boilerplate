<?php

/**
 * API routes for the application.
 *
 * This file defines the endpoints under /api for use by the frontend.
 *
 * @link https://laravel.com/docs/8.x/routing Laravel routing documentation
 * @license https://opensource.org/licenses/MIT MIT License
 */
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/posts', fn () => Post::all());
