<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;

Route::get('/', function () {
    return view('index');
});
Route::get('/create', function () {
    return view('create');
})->name('create');
Route::get('/read', function () {
    return view('read', ['profiles' => Profile::all() ]);
})->name('read');
Route::get('/update', function () {
    return view('update');
})->name('update');
Route::get('/delete', function () {
    return view('delete');
})->name('delete');
