<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::post('/answer', [App\Http\Controllers\AnswerController::class, 'store'])->name('answer.store');
Route::post('/newsletter', [App\Http\Controllers\MailListController::class, 'store'])->name('newsletter.store');

Route::get('/quiz', [App\Http\Controllers\QuizController::class, 'index'])->name('quiz')->middleware('auth');;
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('/search', [App\Http\Controllers\BlogController::class, 'search'])->name('blog.search');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/myresults', [App\Http\Controllers\ResultsController::class, 'index'])->name('result');


Route::get('/privacy-policy', [App\Http\Controllers\LegalController::class, 'privacy'])->name('privacy');
Route::get('/terms-conditions', [App\Http\Controllers\LegalController::class, 'terms'])->name('terms');

Route::get('/change-language/{lang}', [App\Http\Controllers\LanguageController::class, 'changeLang'])->name('changeLang');