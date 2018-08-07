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

/*Route::get('/', function () {
    return view('welcome');
});*/

//use App\Person\Person;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/private', 'HomeController@private')->name('private');

app()->bind('name', function() {
    return new \App\Person\Person;
});


Route::get('/', function () {

    /*$person = new Person();
    echo $person->getName();*/

    return William::getName();

});
