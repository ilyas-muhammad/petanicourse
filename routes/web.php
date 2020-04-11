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

// CONTROLLER VIEW ROUTES
Route::get('/', function () {
    return view('welcome');
});

Route::get('/new-route', function () {
    return 'create new route in laravel';
});

// Request POST - GET
Route::get('/request/{param}', 'PetaniWebController@requestData');
Route::get('/form-contact', 'PetaniWebController@addContact');
Route::post('/request/submit', 'PetaniWebController@submit');


// BLADE
Route::get('/contact', 'PetaniWebController@contact');
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');

// CRUD
// get all
Route::get('/siswa', 'SiswaController@index');

// input
Route::get('/siswa/tambah', 'SiswaController@tambah');
Route::post('/siswa/store', 'SiswaController@store');

// edit
Route::get('/siswa/edit/{params}', 'SiswaController@edit');
Route::post('/siswa/update', 'SiswaController@update');

// delete
Route::get('/siswa/hapus/{params}', 'SiswaController@hapus');

// search
Route::get('/siswa/cari', 'SiswaController@cari');

// ELOQUENT CRUD
// get all
Route::get('/mentor', 'MentorController@index');

// input
Route::get('/mentor/tambah', 'MentorController@tambah');
Route::post('/mentor/store', 'MentorController@store');

// edit
Route::get('/mentor/edit/{params}', 'MentorController@edit');
Route::put('/mentor/update/{params}', 'MentorController@update');

// delete
Route::get('/mentor/hapus/{params}', 'MentorController@hapus');