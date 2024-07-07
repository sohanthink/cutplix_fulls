<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\UserController;

Route::group(['middleware' => 'auth','prefix' => 'admin',],function(){

Route::get("/dashboard", [DashboardController::class,"index"])->name("dashboard");
Route::get("/logout", [AuthController::class,"logout"])->name("logout");
Route::get("/edit-profile", [AuthController::class,"edit"])->name("edit.profile");
Route::post("/edit-profile", [AuthController::class,"update"])->name("update.profile");
Route::get("/update-password", [AuthController::class,"updatePasswordForm"])->name("change.password");
Route::post("/update-password", [AuthController::class,"updatePassword"])->name("update.password");

route::get('setting', [SettingController::class,'index'])->name('setting.index');
route::post('setting/{id}', [SettingController::class,'update'])->name('setting.update');

route::get('user', [UserController::class,'index'])->name('user.index');
route::get('new-user', [UserController::class,'create'])->name('user.create');
route::post('new-user', [UserController::class,'store'])->name('user.store');
route::get('user/{id}', [UserController::class,'delete'])->name('user.delete');
route::get('message', [MessageController::class,'index'])->name('message.index');
route::get('message/delete{id}', [MessageController::class,'delete'])->name('message.delete');

});

route::post('message', [MessageController::class,'store'])->name('message.create');