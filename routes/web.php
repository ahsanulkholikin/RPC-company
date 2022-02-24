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

Route::get('/', function () {
    return view('welcome');
});
$controller = '\App\Http\Controllers';
$login = '\auth\LoginController';

Route::get('/login',$controller.$login.'@index')->name('login');

Route::post('/login',$controller.$login.'@login')->name('login.auth');

Route::middleware('auth')->group(function () {
    $controller = '\App\Http\Controllers';
    $login = '\auth\LoginController';
    $login = '\auth\LoginController';
    
    Route::post('logout',$controller.$login.'@logout')->name('logout');

    Route::get('/dashboard',$controller.$login.'@dashboard')->name('dashboard');

    Route::get('/user/profile',$controller.$login.'@profile')->name('user.profile');
    Route::put('/update',$controller.$login.'@update')->name('user.profile.update');

    Route::resource('kontak', KontakController::class);
    Route::resource('tentang', TentangController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('solusi', SolusiController::class);
    Route::resource('project', ProjectController::class);

});

