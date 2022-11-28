<?php

use App\Http\Livewire\Homepage;
use App\Http\Livewire\AboutUsPage;
use App\Http\Livewire\OurBusinessPage;
use App\Http\Livewire\OilAndGasPage;
use App\Http\Livewire\EpciPage;
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

Route::get('/default', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
