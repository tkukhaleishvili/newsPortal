<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('admin.pages.welcome');
});*/
Route::get('/', function(){
    return view('admin.pages.dashboard');
  })->name('dashboard');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');


Route::post('/login', function () {
    $auth = request()->only('email', 'password');

    if (Auth::guard('admin')->attempt($auth)) {
        // tu sworia
        return redirect()->route('admin.dashboard');
    } else {
        //tu arasworia
        if (User::where('email', $auth['email'])->first()) {
            // tu maili sworia mara paroli arasworia 
            return redirect()->back()->withErrors(['password' => 'Incorrect Password'])->withInput()->with('message', 'Please enter the correct password.');
        } else {
            // tu maili arasworia 
            return redirect()->back()->withErrors(['email' => 'Incorrect Email','password' => 'Incorrect Password'])->withInput()->with('message', 'Please enter the correct email.');
        }
    }
})->name('auth');

Route::post('/logout', function () {
    Session::flush();
    Auth::logout();
    return redirect()->route('admin.login');
})->name('logout');