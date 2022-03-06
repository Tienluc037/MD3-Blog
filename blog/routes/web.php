<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('home');
});

Route::prefix('blogs')->group(function (){
    Route::get('/', [BlogController::class,'index'])->name('blogs.index');
    Route::get('/delete/{id}', [BlogController::class,'destroy'])->name('blogs.destroy');
    Route::get('/create',[BlogController::class,'create'])->name('blogs.create');
    Route::post('/create',[BlogController::class,'store'])->name('blogs.store');
    Route::get('/edit/{id}',[BlogController::class,'edit'])->name('blogs.edit');
    Route::post('/update/{id}',[BlogController::class,'update'])->name('blogs.update');
    Route::get('/detail/{id}',[BlogController::class,'show'])->name('blogs.detail');

});
