<?php

namespace App\Http\Controllers;

use Auth;

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
//  header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Key');


// Route::get('/', function(){
//     return view('welcome');

    
// });

// Route::namespace('Front')->group(function(){
// 	Route::get('/home', 'UsersController@index');
// });

// Http::withHeaders([
//     'Accept' => 'application/json',

//     'CONTENT_TYPE' => 'application/json'

//     ])->post('/add_contact', 'HubspotApiController@create');


// Route::get('/home', function(){
//     return view('home');
// });


// Route::post('https://api.hubapi.com/contacts/v1/contact?hapikey=c800f967-3797-4f26-a7c4-78805b1399d2', 'HubspotApiController@create');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();



// Auth::routes();



// Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



// Route::get('/posts/admin/area/', array('as'=>'home.admin', function(){
//     $url = route('home.admin');
//     return 'heythere this is url : ' . $url;
// }));
Auth::routes(['verify'=>true]);

// Route::get('/home', 'HomeController@index')->name('home');



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
