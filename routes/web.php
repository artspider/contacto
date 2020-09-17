<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\newMsjToExpert;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\employer;


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->middleware('guest');
Route::view('/expert', 'experts.index')->name('experts-index');
Route::view('expert/profile', 'experts.profile')->name('experts-profile');
Route::view('expert/messages', 'experts.alerts')->name('experts-alerts');


Route::view('/employer', 'employers.index');
//Route::view('/employer/expert-detail', 'employers.expert-detail');
Route::livewire('/employer/expert-detail/{id}', 'expert-detail')
  ->name('expert-detail')
  ->layout('employers.layouts.empleador');

/* Route::view('login', 'auth.login'); */
Route::view('prueba', 'prueba');

Route::get( '/x', function() {
    $user = Auth::user();
    $user->notify(new newMsjToExpert(Employer::findOrfail(1)));
});
