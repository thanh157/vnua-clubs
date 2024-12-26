<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client.pages.home.home');
});

Route::get('/login', function () {
    return view('client.login');
})->name('login');


Route::get('/admin', function () {
    return view('admin.pages.index');
});

Route::get('/Hoat-dong-sap-toi', fn() => view('client/pages/actives/actives'))->name('client.actives');
// homehome
Route::get('/Trang-chu', fn() => view('client/pages/home/home'))->name('client.home');
//activeactive
Route::get('/login', fn() => view('client/pages/login/login'))->name('client.login');

Route::get('/Chi-tiet-cau-lac-bo', fn() => view('client/pages/clubs-details/details'))->name('client.details'); 
// Route::get('/Dang-ki-thanh-vien', fn() => view('client/pages/forms/form-member'))->name('client.form-member'); 