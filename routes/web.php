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

Route::get('newslist', [MailController::class, 'index'])->name('news-list');

Route::post('newslist', [MailController::class, 'pinned'])->name('news.update');

Route::get('news/{id}', [MailController::class, 'check'])->name('news.check');

Route::get('menu/{id}', [IndexController::class, 'index'])->name('menu.index');

Route::get('newslist/read', [MailController::class, 'readIndex'])->name('read.index');

Route::get('newslist/pinned', [MailController::class, 'pinIndex'])->name('pinned.index');

Route::get('system/menu', function () {
    return view('System.index');
})->name('system.index');

Route::get('system/risyu', [IndexController::class, 'risyuIndex'])->name('system.risyu');
Route::post('system/risyu/confirm', [IndexController::class, 'confirm'])->name('risyu.confirm');

Route::get('system/edit/{id}', [EditController::class, 'hoge'])->name('system.edit');
Route::post('system/edit/confirm', [EditController::class, 'update'])->name('system.confirm');

Route::get('system/courses', [IndexController::class, 'courseList'])->name('system.courses');
