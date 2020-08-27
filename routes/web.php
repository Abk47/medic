<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard/user', 'AdminController@show')->name('show.dashboard');

Route::get('/dashboard/user/{user}', 'AdminController@show')->name('user.dashboard');

Route::get('/contacts', 'ContactController@show')->name('contacts');

Route::get('/user/forms/membership-form/details', 'MembersController@show')->name('show.members');

Route::post('/user/forms/membership-form/details-save', 'MembersController@save')->name('show.members');

Route::get('/user/forms/membership-form/dependant', function () {
    return view('forms.schedule');
});

Route::get('/form3', function () {
    return view('forms.history');
});

Route::get('/form4', function () {
    return view('forms.details');
});

Route::get('/form5', function () {
    return view('forms.declaration');
});

// For testing purpose
Route::get('/user/status', function () {
    return view('forms.declaration');
});