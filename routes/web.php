<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    /* MAIN FUNCTIONS */
    Route::get('/admin/orders', function () {
        return view('pages.orders');
    })->name('pages_orders');

    Route::get('/admin/home', function () {
        return view('pages.home');
    })->name('pages_home');

    Route::get('/admin/dashboard', function () {
        return view('pages.dashboard');
    })->name('pages_dashboard');

    Route::get('/admin/accounts', function () {
        return view('pages.accounts');
    })->name('pages_accounts');

    Route::get('/admin/stocks', function () {
        return view('pages.stocks');
    })->name('pages_stocks');

    Route::get('/admin/reports', function () {
        return view('pages.reports');
    })->name('pages_reports');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
