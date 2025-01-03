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

Route::get('/sign-up', function () {
    return view('client.sign-up');
})->name('sign-up');

//Admin
Route::get('admin/login', function () {
    return view('admin.pages.admin.login');
})->name('admin.login');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/clubs', function () {
        return view('admin.pages.admin.club-list');
    })->name('admin.clubs');

    Route::get('/clubs/requests', function () {
        return view('admin.pages.admin.club-request');
    })->name('admin.club-requests');
});

//Admin-club
Route::get('/admin-club/login', function () {
    return view('admin.pages.admin-club.club-admin-login');
});

Route::get('/admin-club', function () {
    return view('admin.pages.club');
});

Route::get('/Hoat-dong-sap-toi', fn() => view('client/pages/actives/actives'))->name('client.actives');
// homehome
Route::get('/Trang-chu', fn() => view('client/pages/home/home'))->name('client.home');
//activeactive
Route::get('/login', fn() => view('client/pages/login/login'))->name('client.login');

Route::get('/Chi-tiet-cau-lac-bo', fn() => view('client/pages/clubs-details/details'))->name('client.details');
// form dk tv
Route::get('/Dang-ki-thanh-vien', fn() => view('client/pages/forms/form-member'))->name('client.form-member');

// dki tv
Route::get('/Dang-ki-tham-gia-CLB', fn() => view('client/pages/forms/form-member'))->name('client.form-member');

// dli tl clb
Route::get('/Dang-ki-thanh-lap-clb', fn() => view('client/pages/forms/form-club'))->name('client.form-club');

// dki tk
Route::get('/Dang-ki-tai-khoan', fn() => view('client/pages/sign-up/sign-up'))->name('client.sign-up');

// profile
Route::get('/edit-profile', fn() => view('client/pages/edit-profile/edit'))->name('client.edit');

// spennding
Route::get('/spending', fn() => view('client/pages/spending/spending'))->name('client.spending');

// members
Route::get('/members', fn() => view('client/pages/members/club-member'))->name('client.members');

// notification
Route::get('/notification', fn() => view('client/pages/notifications/notification'))->name('client.notifications');
