<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Apin']);
    });
Route::get('/greeting', [WelcomeController::class,
    'greeting']);
    return view('blog.hello', ['name' => 'Andi']);