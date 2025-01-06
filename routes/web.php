<?php

use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\User\ClubController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ClubDescriptionController;
use App\Http\Controllers\Admin\SpendingController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\ClubRequestController;


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

// Route::get('/', function () {
//     return view('client.pages.home.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/clubs/{id}', [ClubController::class, 'show'])->name('client.clubs.show');

// Route::get('/login', function () {
//     return view('client.login');
// })->name('login');

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
    return view('admin.pages.admin-club.club-list2');
})->name('admin.admin-club');

Route::get('/admin-member2', function () {
    return view('admin.pages.admin-club.admin-members');
})->name('admin.admin-members');

Route::get('/admin-notifications', function () {
    return view('admin.pages.admin-club.admin-notifications');
})->name('admin.admin-notifications');


Route::get('/admin-spending', function () {
    return view('admin.pages.admin-club.admin-spending');
})->name('admin.admin-spending');

Route::get('/admin-active', function () {
    return view('admin.pages.admin-club.admin-active');
})->name('admin.admin-active');

Route::get('/admin-description', function () {
    return view('admin.pages.admin-club.admin-description');
})->name('admin.admin-description');

Route::get('/club-request', function () {
    return view('admin.pages.admin.club-request');
})->name('admin.club-request');

Route::get('/admin-staff', function () {
    return view('admin.pages.admin-club.admin-staff');
})->name('admin.admin-staff');


Route::get('/Hoat-dong-sap-toi', fn() => view('client/pages/actives/actives'))->name('client.actives');
// homehome
Route::get('/Trang-chu', [HomeController::class, 'index'])->name('client.home');
//activeactive
// Route::get('/login', fn() => view('client/pages/login/login'))->name('client.login');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('client.login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('client.logout');

// Route::get('register', )->name('register'); 
Route::post('register', [RegisterController::class, 'register']);

Route::get('/Chi-tiet-cau-lac-bo/{clubId}',  [ClubController::class, 'index'])->name('client.details');
// Route for liking a club
Route::post('/clubs/{id}/like', [ClubController::class, 'like'])->name('clubs.like')->middleware('auth');

// Route::get('/Chi-tiet-cau-lac-bo', fn() => view('client/pages/clubs-details/details'))->name('client.details');
// form dk tv
Route::get('/Dang-ki-thanh-vien', fn() => view('client/pages/forms/form-member'))->name('client.form-member');

// dki tv
Route::get('/Dang-ki-tham-gia-CLB', fn() => view('client/pages/forms/form-member'))->name('client.form-member');

// dli tl clb
Route::get('/Dang-ki-thanh-lap-clb', fn() => view('client/pages/forms/form-club'))->name('client.form-club');

// dki tk 
Route::get('/Dang-ki-tai-khoan', [RegisterController::class, 'showRegistrationForm'])->name('client.sign-up');
Route::post('/Dang-ki-tai-khoan', [RegisterController::class, 'register'])->name('client.sign-up.submit');


// profile
Route::get('/edit-profile', fn() => view('client/pages/edit-profile/edit'))->name('client.edit');

// spennding
Route::get('/spending', fn() => view('client/pages/spending/spending'))->name('client.spending');

// members
Route::get('/members', fn() => view('client/pages/members/club-member'))->name('client.members');

// notification
Route::get('/notification', fn() => view('client/pages/notifications/notification'))->name('client.notifications');

Route::get('/404', function () {
    abort(404);
});


// Route::get('/admin-club', fn() => view('admin/pages/admin-club/form-member'))->name('admin-club.form-member');


Route::get('/admin/clubs/approve/{id}', [ClubController::class, 'approve'])->name('admin.clubs.approve');
Route::get('/admin/clubs/details/{id}', [ClubController::class, 'show'])->name('admin.clubs.details');
Route::get('/admin/clubs/create', [ClubController::class, 'create'])->name('admin.clubs.create');
Route::get('/admin/clubs/edit/{id}', [ClubController::class, 'edit'])->name('admin.clubs.edit');
Route::delete('/admin/clubs/delete/{id}', [ClubController::class, 'destroy'])->name('admin.clubs.delete');
Route::get('/admin/clubs/spending', [ClubController::class, 'spending'])->name('admin.clubs.spending');
Route::get('/admin/clubs/report', [ClubController::class, 'report'])->name('admin.clubs.report');

// Member management routes
Route::get('/admin/members/approve', [MemberController::class, 'approve'])->name('admin.members.approve');
Route::get('/admin/members/list', [MemberController::class, 'list'])->name('admin.members.list');
Route::get('/admin/members/committee', [MemberController::class, 'committee'])->name('admin.members.committee');

// Event management routes
Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.events.create');
Route::get('/admin/events/update', [EventController::class, 'update'])->name('admin.events.update');

// Club description management routes
Route::get('/admin/club-description/create', [ClubDescriptionController::class, 'create'])->name('admin.club-description.create');
Route::get('/admin/club-description/edit', [ClubDescriptionController::class, 'edit'])->name('admin.club-description.edit');
Route::get('/admin/club-description/delete', [ClubDescriptionController::class, 'delete'])->name('admin.club-description.delete');

// Spending management routes
Route::get('/admin/spending/income', [SpendingController::class, 'income'])->name('admin.spending.income');
Route::get('/admin/spending/expense', [SpendingController::class, 'expense'])->name('admin.spending.expense');
Route::get('/admin/spending/report', [SpendingController::class, 'report'])->name('admin.spending.report');

// Announcement management routes
Route::get('/admin/announcements/create', [AnnouncementController::class, 'create'])->name('admin.announcements.create');
Route::get('/admin/announcements/edit', [AnnouncementController::class, 'edit'])->name('admin.announcements.edit');
Route::get('/admin/announcements/delete', [AnnouncementController::class, 'delete'])->name('admin.announcements.delete');
Route::get('/admin/announcements/show', [AnnouncementController::class, 'show'])->name('admin.announcements.show');

// web.php
Route::get('/club-registration', [ClubController::class, 'showRegistrationForm'])->name('club.registration');
Route::post('/club-registration', [ClubController::class, 'submitRegistration'])->name('club.submitRegistration');


// Route để hiển thị danh sách đăng ký tham gia câu lạc bộ
// Route::get('/admin/club-requests', [ClubRequestController::class, 'index'])->name('admin.club-requests');

// Route để hiển thị danh sách đăng ký tham gia câu lạc bộ
Route::get('/admin/club-requests', [ClubRequestController::class, 'index'])->name('admin.club-requests');