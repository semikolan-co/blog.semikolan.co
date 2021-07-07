<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




// General Routes
Route::get('/', [HomeController::class, 'blogs'])->name('index');
Route::get('/blog/{slug}', [HomeController::class, 'blog'])->name('blog');
Route::get('/blogs/{id?}', [HomeController::class, 'blogs'])->name('blogs');
Route::post('/subscribe', [HomeController::class, 'addsubscriber']);
Route::post('/report', [HomeController::class, 'report']);

// Admin Routes
Route::get('dash', [AdminController::class, 'index'])->name('dash');
Route::get('ablogs', [AdminController::class, 'ablogs'])->name('ablogs');
Route::get('email', [AdminController::class, 'email'])->name('email');
Route::get('subscriber', [AdminController::class, 'subscriber'])->name('subscriber');
Route::get('reports', [AdminController::class, 'reports'])->name('reports');
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::get('addblog', [AdminController::class, 'addblog'])->name('addblog');
Route::post('/addblog', [AdminController::class, 'addblogtodb']);
Route::post('/sendmail', [AdminController::class, 'sendmail']);
Route::post('/edit/{id}', [AdminController::class, 'editblog']);
Route::post('/changeBlogStatus/{id}', [AdminController::class, 'changeBlogStatus'])->name('changeBlogStatus');

// Testing Routes
Route::get('previewmail/{mailname}', [AdminController::class, 'previewmail'])->name('previewmail');
