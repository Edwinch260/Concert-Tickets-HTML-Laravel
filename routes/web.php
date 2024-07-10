<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\SuratPerintahLemburController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\KonserController;

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

/*
Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/signin', [
    MainController::class, 'signin'
])->name('signin');

Route::get('/register', [
    MainController::class, 'register'
])->name('register');

Route::get('/checkemail', [
    MainController::class, 'checkemail'
])->name('checkemail');

Route::get('/signout', [
    MainController::class, 'signout'
])->name('signout');

Route::get('/home', [
    MainController::class, 'home'
])->name('signin');

Route::post('/prosessignin', [
    MainController::class, 'prosessignin'
])->name('prosessignin');

Route::post('/prosesregister', [
    MainController::class, 'prosesregister'
])->name('prosesregister');


Route::group(['middleware' => 'signin'], function () {
    Route::get('/homeuser', [
        MainController::class, 'homeuser'
    ])->name('homuser');
    Route::get('/transaksi', [
        MainController::class, 'transaksi'
    ])->name('transaksi');
    Route::get('/pilihtiket', [
        MainController::class, 'pilihtiket'
    ])->name('pilihtiket');
});

Route::group(['middleware' => 'staff'], function () {
    Route::get('/transaksiadmin', [
        MainController::class, 'transaksiadmin'
    ])->name('transaksiadmin');

    Route::get('/masterkonser', [
        KonserController::class, 'konser'
    ])->name('masterkonser');

    Route::get('/detailtiket', [
        KonserController::class, 'detailtiket'
    ])->name('detailtiket');

    Route::get('/tambahkonser', [
        KonserController::class, 'tambahkonser'
    ])->name('tambahkonser');


    
    Route::get('/updatekonser', [
        KonserController::class, 'updatekonser'
    ])->name('updatekonser');
    Route::get('/deletekonser', [
        KonserController::class, 'deletekonser'
    ])->name('deletekonser');
    Route::post('/simpankonser', [
        KonserController::class, 'simpankonser'
    ])->name('simpankonser');
    Route::post('/simpankonser2', [
        KonserController::class, 'simpankonser2'
    ])->name('simpankonser2');
    Route::post('/simpantambahtiket', [
        KonserController::class, 'simpantambahtiket'
    ])->name('simpantambahtiket');
    Route::get('/deletetiket', [
        KonserController::class, 'deletetiket'
    ])->name('deletetiket');
});

Route::get('/', [
    KonserController::class, 'index'
])->name('index');

