<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ResourceImageController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/manager',function(){
        return view('manager');
    });

    Route::resource('resource', ResourceController::class);
    Route::resource('image', ImageController::class);
    Route::get('/resimg/{id}',[ImageController::class,'resimg'])->name('resimg');

    Route::get('/editImage/{id}/{res}',[ImageController::class,'editImage'])->name('editImage');
    Route::post('upload',[ImageController::class,'upload'])->name('upload');

    Route::post('/updateResImg/{id_res}/{old_img}/{id_img}',[ResourceImageController::class,'updateResImg'])->name('updateResImg');


});

require __DIR__.'/auth.php';
