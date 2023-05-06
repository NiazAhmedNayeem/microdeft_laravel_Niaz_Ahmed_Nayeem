<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [WebsiteController::class, 'index'])->name('website.home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    Route::get('/add-blog', [BlogController::class, 'index'])->name('add.blog');
    Route::get('/create-blog', [BlogController::class, 'create'])->name('create.blog');
    Route::get('/edit-blog', [BlogController::class, 'edit'])->name('edit.blog');
    Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage.blog');
    Route::get('/delete-blog', [BlogController::class, 'delete'])->name('delete.blog');
});
