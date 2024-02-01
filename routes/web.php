<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/',[\App\Http\Controllers\PagesController::class,'index'])->name('index');
Route::get('about',[\App\Http\Controllers\PagesController::class,'about'])->name('about');
Route::get('service',[\App\Http\Controllers\PagesController::class,'service'])->name('service');
//Route::get('project',[\App\Http\Controllers\PagesController::class,'project'])->name('project')->middleware('throttle:2');
Route::get('project',[\App\Http\Controllers\PagesController::class,'project'])->name('project');
Route::get('contact',[\App\Http\Controllers\PagesController::class,'contact'])->name('contact');
//Route::get('blog',[\App\Http\Controllers\PagesController::class,'blog'])->name('blog');
Route::get('single',[\App\Http\Controllers\PagesController::class,'single'])->name('single');
Route::get('posts',[\App\Http\Controllers\PagesController::class,'posts'])->name('posts');
//Route::get('post',[\App\Http\Controllers\PagesController::class,'posts'])->name('posts');



Route::resources([
       'contacts'=>\App\Http\Controllers\ContactsController::class,
    'post'=>\App\Http\Controllers\PostController::class,
    'comment'=>\App\Http\Controllers\CommentController::class,
    'notification'=>\App\Http\Controllers\NotificationController::class,
]);
Route::middleware('auth')->group(function (){
     Route::get('notification/{notification}/read',[\App\Http\Controllers\NotificationController::class,'read'])->name('notification.read');
});
//Route::get('notification/{notification}/read',[\App\Http\Controllers\NotificationController::class,'read'])->name('notification.read');

Route::get('/dashboard', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('/');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('language/{locale}',[\App\Http\Controllers\LanguageController::class,'change_locale'])->name('locale.change');

require __DIR__.'/auth.php';
