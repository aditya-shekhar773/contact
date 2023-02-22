<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\AuthController;



Route::middleware('auth')->group(function () {
    Route::controller(HomeController::class)->group(function () {
    Route::post("/phone", "storeData")->name("student.create");
    Route::get('/search',"search")->name('student.search');
    Route::get("/phone","phone")->name('phone');
    Route::get("/edit","edit")->name('edit');
    Route::get("/", "display")->name('student.show');
    Route::get('/delete/{id}', 'delete')->name('delete');
});
});


Route::prefix("auth")->group(function(){
    Route::controller(AuthController::class)->group(function () {
        Route::match(["get","post"],"/login","login")->name('auth.login');
        Route::match(["get","post"],"/register","register")->name('auth.register');
        Route::get('/logout','loginView')->name('auth.logout');
    });
});

