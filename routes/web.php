<?php
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile.index');
})->name('index');

Route::get('about', function () {
    return view('layouts.about');
})->name('about');

Route::get('post', function () {
    return view('layouts.post');
})->name('post');

Route::get('contact', function () {
    return view('layouts.contact');
})->name('contact');

Route::get('dasboard', function () {
    return view('admin.admin');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('layouts.admin.index');
    });
});
