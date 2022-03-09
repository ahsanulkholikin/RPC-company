<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
$controller = '\App\Http\Controllers';
$login = '\auth\LoginController';
$guest = '\GuestController';

Route::get('/login',$controller.$login.'@index')->name('login');

Route::post('/login',$controller.$login.'@login')->name('login.auth');

Route::middleware('auth')->group(function () {
    $controller = '\App\Http\Controllers';
    $login = '\auth\LoginController';
    $login = '\auth\LoginController';
    
    Route::post('logout',$controller.$login.'@logout')->name('logout');

    Route::get('/admin/dashboard',$controller.$login.'@dashboard')->name('dashboard');

    Route::get('/admin/user/profile',$controller.$login.'@profile')->name('user.profile');
    Route::put('/update',$controller.$login.'@update')->name('user.profile.update');

    Route::resource('/admin/kontak', KontakController::class);
    Route::resource('/admin/tentang', TentangController::class);
    Route::resource('/admin/profile', ProfileController::class);
    Route::resource('/admin/solusi', SolusiController::class);
    Route::resource('/admin/project', ProjectController::class);

    Route::post('/admin/project/ngedit/{id}','ProjectController@ngedit')->name('projecttt.ngedit');
});

Route::get('/',$controller.$guest.'@index')->name('home');
Route::get('/home', $controller.$guest.'@index')->name('home.i');
Route::get('/artikel/{id}/{slug}', $controller.$guest.'@article')->name('home.article');
Route::get('/kebijakan-perusahaan', $controller.$guest.'@kebijakan')->name('home.term');

Route::post('/kontakk/post', $controller.$guest.'@kontakStore')->name('kontakk.post');

