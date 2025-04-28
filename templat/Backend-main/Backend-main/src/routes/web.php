<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\Index;
use App\Livewire\Resume;
use App\Livewire\Skill;
use App\Livewire\Work;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

Route::get('/', Index::class)->name('home');
Route::get('/skill', Skill::class)->name('skill');
Route::get('/work', Work::class)->name('work');
