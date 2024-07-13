<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profile;

Route::get('/', function () {
    return view('index');
});
Route::get('/create', function () {
    return view('create');
})->name('create');
Route::post('/create', function () {
    request()->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email:rfc,dns', 'unique:profiles'],
        'phone_number' => ['required', 'string', 'max:15']
    ]);
    Profile::create([
        'name' => request('name'),
        'email' => request('email'),
        'phone_number' => request('phone_number')
    ]);
    return redirect()->route('read');

    // dd(request()->all());
});
Route::get('/read', function () {
    return view('read', ['profiles' => Profile::all() ]);
})->name('read');
Route::get('/update', function () {
    return view('update.index', ['profiles' => Profile::all()]);
})->name('update');
Route::get('/update/{id}/edit', function ($id) {
    $profile = Profile::find($id);
    return view('update.edit_profile', ['profiles' => $profile ]);
});
Route::get('/delete', function () {
    return view('delete', ['profiles' => Profile::all()]);
})->name('delete');
