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

Route::get('/dashboard/user/{user}', 'AdminController@index')->name('index.dashboard');

Route::get('/contacts', 'ContactController@show')->name('contacts.show');

Route::get('/user/forms/membership-form/details/create', 'MembersController@show')->name('show.members');

Route::post('/user/forms/membership-form/details/save', 'MembersController@store')->name('save.members');

Route::get('/user/forms/membership-form/details/edit', 'MembersController@edit')->name('members.edit');

Route::patch('/user/forms/membership-form/details/{id}', 'MembersController@update')->name('members.update');

Route::get('/user/forms/membership-form/dependant', 'DependantController@show')->name('dependant.show');

Route::post('/user/forms/membership-form/dependant', 'DependantController@store')->name('dependant.store');

Route::delete('/user/forms/membership-form/dependant/{id}', 'DependantController@destroy')->name('dependant.destroy');

Route::get('/user/forms/membership-form/medical-history/create', 'HistoryController@show')->name('history.show');

Route::post('/user/forms/membership-form/medical-history', 'HistoryController@store')->name('history.store');

Route::patch('/user/forms/membership-form/medical-history', 'HistoryController@update')->name('history.update');

Route::get('/user/forms/membership-form/confidential-medical-history','ConfidentialController@show')->name('confidential.show');

Route::post('/user/forms/membership-form/confidential-medical-history/save','ConfidentialController@store')->name('confidential.save');

Route::delete('/user/forms/membership-form/confidential-medical-history/{id}','ConfidentialController@destroy')->name('confidential.destroy');

Route::get('/user/forms/membership-form/declaration','AgreementController@show')->name('agreement.show');

Route::post('/user/forms/membership-form/declaration','AgreementController@store')->name('agreement.store');

use App\Mail\ConfirmationMail;
// For testing purpose
Route::get('/email', function () {
    return new ConfirmationMail();
});