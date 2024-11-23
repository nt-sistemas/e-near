<?php

use App\Livewire\App\Company;
use App\Livewire\App\Main as AppMain;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Site\Main;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Main::class)->name('site.main');

Route::get('/login', Login::class)->name('login');
Route::get('/logout', Logout::class)->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/app', AppMain::class)->name('app.main');
    Route::get('/company', Company::class)->name('app.company');
});
