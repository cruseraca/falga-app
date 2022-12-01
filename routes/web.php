<?php

use App\Http\Livewire\Homepage;
use App\Http\Livewire\AboutUsPage;
use App\Http\Livewire\OurBusinessPage;
use App\Http\Livewire\OilAndGasPage;
use App\Http\Livewire\EpciPage;
use App\Http\Livewire\PropertyPage;
use App\Http\Livewire\FutureBusinessPage;
use App\Http\Livewire\IndustrialRentalPage;
use App\Http\Livewire\EsgPage;
use App\Http\Livewire\CareerPage;
use App\Http\Livewire\MediaPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Homepage::class);
Route::get('/about-us', AboutUsPage::class);
Route::get('/our-business', OurBusinessPage::class);
Route::get('/oil-and-gas-business', OilAndGasPage::class);
Route::get('/epci-business', EpciPage::class);
Route::get('/prop-business', PropertyPage::class);
Route::get('/future-business', FutureBusinessPage::class);
Route::get('/industrial-rental', IndustrialRentalPage::class);
Route::get('/esg', EsgPage::class);
Route::get('/career', CareerPage::class);
Route::get('/media-and-information', MediaPage::class);

Route::get('/default', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
