<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\TopicController;
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

Route::get('/', [TopicController::class, 'index'])->name('site.index');


Route::get('/topic/create', [TopicController::class, 'create'])->name('topic.create');
Route::post('/topic', [TopicController::class, 'store'])->name('topic.store');
Route::get('/topic/{topic}/page', [TopicController::class, 'show'])->name('topic.page.show');
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::put('/comment/{comment}/positive_feedback', [CommentController::class,'positive_feedback'])->name('comment.positiveFeedback');
Route::put('/comment/{comment}/negative-feedback', [CommentController::class,'negative_feedback'])->name('comment.negativeFeedback');



Route::get('/test', function () {
//    \App\Models\Topic::create(['title' => 'salam mmna']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
