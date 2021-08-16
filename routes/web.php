<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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
Route::get('search/{q?}', [HomeController::class, 'search'])->name('search');
Route::get('tag/{q}', [HomeController::class, 'tag'])->name('tag');
Route::get('category/{q}', [HomeController::class, 'category'])->name('category');
Route::get('subcategory/{q}', [HomeController::class, 'subcategory'])->name('subcategory');
Route::post('/subscribe', [HomeController::class, 'addsubscriber']);
Route::post('/report', [HomeController::class, 'report']);

// Admin Routes
Route::get('dash', [AdminController::class, 'index'])->name('dash');
Route::get('ablogs', [AdminController::class, 'ablogs'])->name('ablogs');
Route::get('thecategory', [AdminController::class, 'thecategory'])->name('thecategory');
Route::get('thesubcategory', [AdminController::class, 'thesubcategory'])->name('thesubcategory');
Route::get('email', [AdminController::class, 'email'])->name('email');
Route::get('subscriber', [AdminController::class, 'subscriber'])->name('subscriber');
Route::get('reports', [AdminController::class, 'reports'])->name('reports');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::get('addblog', [UserController::class, 'addblog'])->name('addblog');
Route::post('/addblog', [UserController::class, 'addblogtodb']);
Route::post('/addCategory', [AdminController::class, 'addCategory'])->name('addCategory');
Route::post('/addSubcategory', [AdminController::class, 'addSubcategory'])->name('addSubcategory');
Route::post('/sendmail', [AdminController::class, 'sendmail']);
Route::post('/edit/{id}', [UserController::class, 'editblog']);
Route::post('/changeBlogStatus/{id}', [UserController::class, 'changeBlogStatus'])->name('changeBlogStatus');
Route::post('/changeCategoryStatus/{id}', [AdminController::class, 'changeCategoryStatus'])->name('changeCategoryStatus');
Route::post('/changeSubcategoryStatus/{id}', [AdminController::class, 'changeSubcategoryStatus'])->name('changeSubcategoryStatus');

// Testing Routes
Route::get('previewmail/{mailname}', [AdminController::class, 'previewmail'])->name('previewmail');



//User Routes
Route::get('/myblogs', [UserController::class, 'myblogs'])->name('myblogs');




// Social Authentication Routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');
Route::get('auth/linkedin', [LinkedinController::class, 'linkedinRedirect'])->name('redirectToLinkedin');
Route::get('auth/linkedin/callback', [LinkedinController::class, 'linkedinCallback']);
Route::get('auth/github', [GitHubController::class, 'gitRedirect'])->name('redirectToGithub');
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);