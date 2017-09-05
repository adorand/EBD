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


use Illuminate\Support\Facades\Session;


Auth::routes();

Route::get('/', 'accueilController@index');


Route::post('/addElement/{class}', 'saveController@save');

Route::get('/deleteElement/{class}', 'deleteController@delete' );


Route::get('/deconnexion','accueilController@deconnexion');


Route::get('/session', function ()
{
    if(empty(Session::get('test')))
    {

        Session::put('test','tester');
        //Session::save();
        echo "vide";

    }
    else
    {
        //Session::flush();
        echo "non vide";
    }

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
