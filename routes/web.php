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
Route::get('/', function() {return view('app');});
Route::get('signup', 'Auth\RegisterEmailController@index')->name('auth.register');
Route::post('signup', 'Auth\RegisterEmailController@register')->name('auth.register');
Route::get('signin', 'Auth\LoginEmailController@index')->name('auth.login');


// Route::post('signup', 'Auth\RegisterEmailController@store');
// Route::post('signin', 'Auth\LoginEmailController@store');

// Route::get('contacts', [
//     'as' => 'contacts.index',
//     'uses' => 'ContactController@index'
//   ]);
//   Route::get('contacts/contact', [
//     'as' => 'contacts.create',
//     'uses' => 'ContactController@create'
//   ]);
//   Route::get('contacts/{contact}', [
//     'as' => 'contacts.show',
//     'uses' => 'ContactController@show'
//   ]);
//   Route::get('contacts/{contact}/edit', [
//     'as' => 'contacts.edit',
//     'uses' => 'ContactController@edit'
//   ]);
//   Route::post('contacts/{contact}', [
//     'as' => 'contacts.store',
//     'uses' => 'ContactController@store'
//   ]);
//   Route::delete('contacts/{contact}', [
//     'as' => 'contacts.destroy',
//     'uses' => 'ContactController@destroy'
//   ]);
//   Route::post('contacts/{contact}', [
//     'as' => 'contacts.destroy',
//     'uses' => 'ContactController@destroy'
//   ]);
//   Route::patch('contacts/{contact}', [
//     'as' => 'contacts.update',
//     'uses' => 'ContactController@update'
//   ]);
//   Route::put('contacts/{contact}', [
//     'as' => 'contacts.update',
//     'uses' => 'ContactController@update'
//   ]);
