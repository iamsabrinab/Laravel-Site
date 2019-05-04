<?php

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


 // Routing to the home page.
Route::get('/', 'NewController@home');

// Routing to the aout page.
Route::get('about', 'NewController@about');

// Routing to the contacts 

Route::get('/contacts','NewController@contacts');
Route::post('/contacts','NewController@store');


Route::get('/user/{id}', function ($id) {
   return "This is the user    ".$id;
});


Route::get('/allTickets','NewController@allTickets');
Route::get('/singleTicket/{id}','NewController@singleTicket');
Route::get('/afterDelete/{id}','NewController@deleteTicket');

// The routing concerned with the edi ticket form.
Route::get('/editTicket/{id}', 'NewController@editTicket');
Route::post('/editTicket/{id}','NewController@showEdit');



