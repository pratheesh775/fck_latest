<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::get('/admin/member_list', [MemberController::class, 'member_list'])->name('members.list');
Route::get('/members/add', [MemberController::class, 'create'])->name('members.create');

Route::get('/event/list', [EventController::class, 'list'])->name('event.list');



