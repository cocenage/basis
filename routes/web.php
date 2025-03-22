<?php

use App\Livewire\PageHome;
use Illuminate\Support\Facades\Route;

Route::get('/', PageHome::class)->name('page.home');
