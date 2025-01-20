<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/manga/genres', [MangaController::class, 'genres'])->name('manga.genres');
