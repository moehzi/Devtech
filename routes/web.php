<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;


Route::get('/', [MembersController::class, 'index'])->name('index');
Route::get('member', [MembersController::class, 'create'])->name('member');
Route::post('simpan-member', [MembersController::class, 'store'])->name('simpan-member');
Route::get('edit-member/{id}', [MembersController::class, 'edit'])->name('edit-member');
Route::post('update-member/{id}', [MembersController::class, 'update'])->name('update-member');
Route::get('delete-member/{id}', [MembersController::class, 'destroy'])->name('delete-member');
