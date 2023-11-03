<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CertificatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperianceController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SettingController;

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

Route::get('/', [HomeController::class,'main']);
Route::get('/admin', [HomeController::class, 'index']);
Route::get('/admin/home', [HomeController::class, 'index'])->name('home');
Route::get('{id}/', [ProjectController::class, 'show']);

Route::resource("/admin/formation",FormationsController::class);
Route::resource("/admin/experience",ExperianceController::class);
Route::resource("/admin/about",AboutController::class);
Route::resource("/admin/skill",SkillController::class);
Route::resource("/admin/project",ProjectController::class);
Route::resource("/admin/contact",ContactController::class);
Route::resource("/admin/client",ClientController::class);
Route::resource("/admin/setting",SettingController::class);
Route::resource("/admin/certificat",CertificatController::class);

