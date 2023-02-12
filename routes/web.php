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

Route::get('/', [\App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('frontend.home');
Route::get('/show/show_id={id?}', [\App\Http\Controllers\Frontend\FrontendController::class, 'show'])->name('frontend.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'isAdmin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'isAdmin'])->group(function () {
   Route::prefix('/question')->controller(\App\Http\Controllers\Admin\QuestionController::class)->group(function () {
       Route::get('/list', 'index')->name('admin.question.list');
       Route::get('/create', 'create')->name('admin.question.create');
       Route::get('/edit/question_id={id?}', 'edit')->name('admin.question.edit');
       Route::get('/destroy/{id}', 'destroy')->name('admin.question.destroy');
       Route::post('/store', 'store')->name('admin.question.store');
       Route::put('/update/{id}', 'update')->name('admin.question.update');
       Route::get('/delete/question_id={id?}', 'destroy')->name('admin.question.destroy');
   });
   Route::prefix('/feedback')->controller(\App\Http\Controllers\Admin\FeedbackController::class)->group(function () {
      Route::get('/index', 'index')->name('admin.feedback.index');
      Route::get('/create', 'create')->name('admin.feedback.create');
      Route::get('/edit/feedback_id={id?}', 'edit')->name('admin.feedback.edit');
      Route::get('/destroy/feedback_id={id?}', 'destroy')->name('admin.feedback.destroy');
      Route::post('/store', 'store')->name('admin.feedback.store');
      Route::put('/update/{id}', 'update')->name('admin.feedback.update');
   });
    Route::prefix('/show')->controller(\App\Http\Controllers\Admin\ShowController::class)->group(function () {
        Route::get('/index', 'index')->name('admin.show.index');
        Route::get('/create', 'create')->name('admin.show.create');
        Route::get('/edit/show_id={id?}', 'edit')->name('admin.show.edit');
        Route::get('/destroy/show_id={id?}', 'destroy')->name('admin.show.destroy');
        Route::post('/store', 'store')->name('admin.show.store');
        Route::put('/update/{id}', 'update')->name('admin.show.update');
    });
    Route::prefix('/gallery')->controller(\App\Http\Controllers\Admin\GalleryController::class)->group(function () {
       Route::get('/index', 'index')->name('admin.gallery.index');
    });
});

require __DIR__.'/auth.php';
