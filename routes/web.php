<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;

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

Route::get('/', function () {
    return view('pages.homeUI');
});
Route::get('/backoffice', function () {
    return view('pages.homeBack');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::resource('/backoffice/hero', HeroController::class);
Route::resource('/backoffice/about', AboutController::class);
Route::resource('/backoffice/feature', FeatureController::class);
Route::resource('/backoffice/team', TeamController::class);
Route::resource('/backoffice/service', ServiceController::class);
Route::resource('/backoffice/testimonials', TestimonialController::class);
Route::resource('/backoffice/contact', ContactController::class);