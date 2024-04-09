<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\frontEnd_Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thes
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['checkRole:admin'])->group(function () {
Route::resource('users', usersController::class);

});

Route::resource('about', AboutController::class);
Route::resource('skills', SkillsController::class);
Route::resource('educationals', EducationalController::class);
Route::resource('experiences', ExperienceController::class);
Route::resource('contacts', ContactController::class);
Route::resource('/', frontEnd_Controller::class);
Route::resource('admins', usersController::class)->Middleware('PreventOwnAccountDeletion');


