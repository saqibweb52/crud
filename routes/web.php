<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\studentController;

Route::get('/',[studentController::class,'index'])->name('insertmarks');

Route::post('insert',[studentController::class,'create'])->name('create');

Route::get('/edit/{id}',[studentController::class,'edit'])->name('edit');

Route::put('/edit/{id}',[studentController::class,'update'])->name('update');

Route::get('/delete/{id}',[studentController::class,'destroy'])->name('destroy');