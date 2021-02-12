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

Route::get('/member', 'AdminController@member')->name('admin.member');

Route::post("/store_event",'AdminController@store_event')->name('store.event');

Route::get('/event_show/{id}', 'AdminController@event_show')->name('event.show');

Route::get('/sendEmail/{id}', 'AdminController@sendEmail')->name('event.email');

Route::get('/email/{id}', 'AdminController@email')->name('email.test');

Route::get('/register', 'AdminController@register')->name('email.register');

Route::get('/pay', 'PaymentController@index')->name('pay');

// ---------------------------- Search -----------------------------------

Route::get('/search-event', 'AdminController@event_search')->name('event.search');

Route::get('/search-payment', 'PaymentController@payment_search')->name('payment.search');

Route::get('/search-member', 'AdminController@member_search')->name('member.search');

Route::get('/emptystock', function () {
    return view('payment.emptystock');
});

Route::get('/checkout','PaymentController@checkout');
Route::post('/checkout','PaymentController@afterpayment')->name('checkout.credit-card');


Route::get('/event/{id}', 'PaymentController@create')->name('event-public.show');
/**
*	PAYMENT GATEWAY INTEGRATION ROUTES
*/
Route::post('/prepare-payment/{id}', 'PaymentController@store')->name('payment-request');
Route::post('/payment-response', 'PaymentController@response')->name('payment-response');
Route::post('/payment-callback', 'PaymentController@callback')->name('payment-callback');

Route::get('/payment-list', 'PaymentController@index')->name('payment.lists');

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');

Route::get('checkid', 'AuthController@checkid')->name('check.id');

/**
*	generate excel document with Maatwebsite/Laravel-Excel
*/

Route::get('export-event','AdminController@exportevent')->name('export.event');

Route::get('export-payment','AdminController@exportpayment')->name('export.payment');

Route::get('export-event-view','AdminController@exporteventview')->name('export.event.view');

/**
*	generate excel document with Maatwebsite/Laravel-Excel
*/

Route::get('/chart','AdminController@Chartjs')->name('admin.chart');

Route::get('/calendar','CalendarController@calendar')->name('admin.calendar');