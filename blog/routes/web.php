<?php
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/blog/{slug}', [App\Http\Controllers\HomeController::class, 'post'])->name('/blog/{slug}');
Route::redirect('/login', '/dashboard');



Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
Route::get('/postagens', function () {
   return view('postagens');
});
