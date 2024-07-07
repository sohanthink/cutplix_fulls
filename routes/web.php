<?php


use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'],function(){
  Route::get("/login", [AuthController::class,"index"])->name("login");
  Route::post("/login", [AuthController::class,"login"])->name("login.user");
});

// Route::get("/register", [AuthController::class,"register"])->name("register");
// Route::post("/register", [AuthController::class,"store"])->name("register.user");

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('portfolio/{slug}',[HomeController::class,'portfolio_view'])->name('user.portfolio.view');
Route::get('blog/{slug}',[HomeController::class,'blog_view'])->name('user.blog.view');
Route::get('blog',[HomeController::class,'blog'])->name('user.blog');
Route::get('portfolio',[HomeController::class,'portfolio'])->name('user.portfolio');
Route::get('carrer',[HomeController::class,'carrer'])->name('user.carrer');
Route::get('learn',[HomeController::class,'learn'])->name('user.learn');
