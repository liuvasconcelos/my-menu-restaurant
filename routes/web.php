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
    return view('login');
});

Route::post('/home', 'LoginController@login') -> name('login');

Route::get('/principalhome', 'LoginController@goToHome') -> name('home');
Route::get('/register', 'RegisterController@goToChooseRegister') -> name('register');
Route::get('/reservation', 'ReservationController@goToReservation') -> name('reservation');
Route::get('/login', 'LoginController@logout') -> name('logout');

Route::get('/registerItem', 'RegisterController@goToRegisterAItem') -> name('registeraitem');
Route::post('/registerr', 'RegisterController@register') -> name('updateitem');
Route::post('/tablecontrol', 'ReservationController@reserve') -> name('updateTables');

Route::get('/registermenu', 'RegisterController@goToRegisterMenu') -> name('registermenu');
Route::post('/addmenu', 'RegisterController@registerMenu') -> name('addmenu');

Route::get('/tablecontrol', 'TablesControlController@goToTablesControl') -> name('tablecontrol');
Route::get('{idTable}/addorder', 'TablesControlController@addOrder') -> name('addorder');

