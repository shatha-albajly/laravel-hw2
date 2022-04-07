<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/all-jobs', [HomeController::class, 'allJobs'])->name('allJobs');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/job', [HomeController::class, 'job'])->name('job');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/partners', [HomeController::class, 'partners'])->name('partners');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/qualification', [HomeController::class, 'qualification'])->name('qualification');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/skills', [HomeController::class, 'skills'])->name('skills');
Route::get('/experience', [HomeController::class, 'experience'])->name('experience');
Route::get('/master', [HomeController::class, 'sidebar']);