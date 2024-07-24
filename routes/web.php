<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;
use App\Http\Controllers\Profile_info;

Route::get('/', function () {
    return view('index');
});
// create profile
Route::view('/create', 'create')->name('create');
Route::post('/create', [Profile_info::class, 'create']);

// show profile
Route::get('/read',[Profile_info::class, 'read'])->name('read');
Route::get('/update', [Profile_info::class, 'update_index'])->name('update');

// edit profile
Route::get('/update/{id}/edit', [Profile_info::class, 'show_edit']);

// update profile
Route::patch('/update/{id}', [Profile_info::class, 'update']);

// delete profile
Route::delete('/delete/{id}',[Profile_info::class, 'delete']);
Route::get('/delete', function () {
    return view('delete', ['profiles' => Profile::all()]);
})->name('delete');
