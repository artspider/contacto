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
Route::get('/login', 'Auth\LoginController@showLoginForm')->middleware('guest')->name('login');
Route::get('/home', 'Auth\LoginController@showLoginForm')->middleware('guest')->name('login');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Expert::routes();
Route::group(['middleware' => ['isExpert']] , function() {
  Route::view('/expert', 'experts.index')->name('experts-index');
  Route::view('expert/profile', 'experts.profile')->name('experts-profile');
  Route::view('expert/messages', 'experts.alerts')->name('experts-alerts');
  Route::livewire('expert/contract/{id}', 'contract-expert')
  ->name('contract-expert')
  ->layout('experts.layouts.internal');
});

Route::group([ 'middleware' => ['isEmployer']], function() {
  Route::view('/employer', 'employers.index');
  Route::view('employer/profile', 'employers.profile')->name('employers-profile');
  Route::view('employer/messages', 'employers.alerts')->name('employers-alerts');
  Route::livewire('/employer/expert-detail/{id}', 'expert-detail')
    ->name('expert-detail')
    ->layout('employers.layouts.empleador');

  Route::livewire('employer/contract/{id}', 'contract')
  ->name('contract')
  ->layout('employers.layouts.empleador');
});






