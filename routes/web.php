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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes
Route::middleware(['auth'])->group(function(){
    
    //Roles
    Route::resource('roles', 'RoleController');
   
    //Products
    Route::resource('products', 'ProductController');

    //Users
    Route::get('users','UserController@index')->name('users.index')
        ->middleware('permission:users.index'); 
        
    Route::get('users/{user}','UserController@show')->name('users.show')
        ->middleware('permission:users.show'); 

    Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy'); 

    Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit'); 

    Route::put('users/{user}','UserController@update')->name('users.update')
        ->middleware('permission:users.edit'); 
                
});