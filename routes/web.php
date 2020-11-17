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


Route::get('/admin', 'AdminController@admin')->name('admin.main');

Route::get('/event', 'AdminController@event')->name('admin.event');

Route::get('/create_event', 'AdminController@create_event')->name('create.event');

Route::get('/ticket', 'AdminController@ticket')->name('admin.ticket');

Route::post("/store_event",'AdminController@store_event')->name('store.event');

Route::get('/event_show/{id}', 'AdminController@event_show')->name('event.show');

Route::get('/sendEmail', 'AdminController@sendEmail')->name('event.email');

Route::get('/email', 'AdminController@email')->name('email.test');

Route::get('/register', 'AdminController@register')->name('email.register');

Route::get('/pay', 'PaymentController@index')->name('pay');


Route::get('/checkout','PaymentController@checkout');
Route::post('/checkout','PaymentController@afterpayment')->name('checkout.credit-card');



Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');