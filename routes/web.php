<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PortofolioController;

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
    return view('main-page.index');
});

Route::get('/dashboard', function () {
    return view('admin-page.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/',[
    PortofolioController::class, 'index'
])->name('portofolio');

require __DIR__.'/auth.php';
