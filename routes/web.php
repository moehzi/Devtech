<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;


Route::get('/', [MembersController::class, 'index'])->name('index');
Route::get('member', [MembersController::class, 'create'])->name('member');
Route::post('simpan-member', [MembersController::class, 'store'])->name('simpan-member');
