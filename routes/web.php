<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\RegisterController;



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
    return view('home', [
        'name' => 'Ahmad Asyhari',
        'role' => 'staf',
        'buah' => ['pisang', 'apel', 'jeruk', 'semangka', 'anggur'],
    ]);
});

Route::get('/students', [StudentController::class,'index']);
Route::get('/class', [ClassController::class,'index']);
Route::get('/register', [RegisterController::class,'create']);
Route::get('/register/create', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');






Route::get('/daftar', function () {
    return view('daftar', [
        'name' => 'Ahmad Asyhari',
    ]);
});




