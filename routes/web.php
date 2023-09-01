<?php

use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\error;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members',[App\Http\Controllers\MemberController::class,'index'])->name('members');
Route::post('/member',[App\Http\Controllers\MemberController::class,'store'])->name('member');

Route::get('/registration',[App\Http\Controllers\MemberController::class,'registration'])->name('registration');

Route::get('/edit/{id}',[App\Http\Controllers\MemberController::class,'edit'])->name('edit');
Route::post('/memberEdit',[App\Http\Controllers\MemberController::class,'memberEdit'])->name('memberEdit');

Route::post('/memberDelete/{id}',[App\Http\Controllers\MemberController::class,'memberDelete'])->name('/memberDelete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
