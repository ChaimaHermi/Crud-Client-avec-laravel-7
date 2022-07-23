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

Route :: get ('/FormClient' , 'ClientController@showFormClient' ) ;
Route :: post('/ajoutClient' , 'ClientController@ajout') ;
Route :: get ('/client/list' , 'ClientController@showList') ;
route::get("/client/delete/{id}",'ClientController@delete') ;
route::get("/client/edit/{id}",'ClientController@edit') ;

route::put("update-data/{id}",'ClientController@update') ;