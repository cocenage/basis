<?php

use App\Http\Controllers\Client\FileController;
use App\Livewire\NotFound;
use App\Livewire\PageCatalogs;
use App\Livewire\PageCompany;
use App\Livewire\PageContacts;
use App\Livewire\PageHome;
use App\Livewire\PageNews;
use App\Livewire\SingleNews;
use App\Livewire\SingleProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', PageHome::class)->name('page.home');

Route::get('/catalog', PageCatalogs::class)->name('page.catalog');
Route::get('/catalog/{slug}', SingleProduct::class)->name('single.product');

Route::get('/news', PageNews::class)->name('page.news');
Route::get('/news/{slug}', SingleNews::class)->name('single.news');

Route::get('/company', PageCompany::class)->name('page.company');
Route::get('/contacts', PageContacts::class)->name('page.contacts');

Route::get('/privacy-pdf', [FileController::class, 'showPrivacyPolicy'])->name('privacy.pdf');

Route::get('/{any}', NotFound::class)->where('any', '.*');
