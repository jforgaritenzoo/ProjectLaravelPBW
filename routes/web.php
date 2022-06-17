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

use Illuminate\Support\Facades\Route;

Route::middleware(['preventBackHistory','auth'])->group(function () {
    Route::get('/login/logout', 'LoginController@logout');
});


Route::get('/', function () {
    return view('login');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'Controllerku@dashboard');
    Route::get('/user', 'Controllerku@user');
    Route::get('/user/formuser', 'Controllerku@formuser');
    Route::get('/user/cariuser', 'Controllerku@cariuser');
    Route::post('/user/simpanuser', 'Controllerku@simpanuser');
    Route::get('/user/ubahuser/{id}', 'Controllerku@formedituser');
    Route::put('/user/updateuser/{id}', 'Controllerku@updateuser');
    Route::get('/user/hapususer/{id}', 'Controllerku@hapususer');

    //Routing mahasiswa
    //Read Create
    Route::get('/mahasiswa', 'Controllerku@tampilmhs');
    Route::get('/mahasiswa/cari', 'Controllerku@pencarianmhs');
    Route::get('/mahasiswa/formmhs', 'Controllerku@formmhs');
    Route::post('/mahasiswa/simpanmhs', 'Controllerku@simpanmhs');

    //Update Delete
    Route::get('/mahasiswa/ubahmhs/{id}', 'Controllerku@formeditmhs');
    Route::put('/mahasiswa/updatemhs/{id}', 'Controllerku@updatemhs');
    Route::get('/mahasiswa/hapusmhs/{id}', 'Controllerku@hapusmhs');
});
Route::get('/login', 'LoginController@formlogin')->name('login');
Route::post('/login/ceklogin', 'LoginController@ceklogin');

