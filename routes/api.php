<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserTableController;

Route::get('users', [UserTableController::class, 'index']);
Route::get('users/filter', [UserTableController::class, 'filter']);
