<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Login.login');
});

// Route::post('menu', function () {
//     return view('MainMenu.index');
// });

Route::get('newslist{id}', [MailController::class, 'index'])->name('news-list');

Route::get('newslist/{id}', [MailController::class, 'index']);

// Route::get('news/', function () {
//     return view('MainMenu.news');
// });

Route::get('news/{id}', [MailController::class, 'check'])->name('news.check');

Route::get('menu/{id}', [IndexController::class, 'index'])->name('menu.index');

Route::get('system/menu', function () {
    return view('System.index');
})->name('system.index');

Route::get('system/risyu', [IndexController::class, 'risyuIndex'])->name('system.risyu');

Route::get('system/edit/{id}', [EditController::class, 'hoge'])->name('system.edit');
Route::post('system/edit/confirm', [EditController::class, 'update'])->name('system.confirm');
