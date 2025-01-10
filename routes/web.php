<?php


use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\ClubController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Guest\ActivityController;
use App\Http\Controllers\User\ClubRequestController;
use App\Http\Controllers\ClubPresident\NotificationController;
use App\Http\Controllers\User\MemberRequestController;
use App\Http\Controllers\Admin\ClubManagementController;
use App\Http\Controllers\ClubPresident\MemberController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\ClubPresident\SpendingController;
use App\Http\Controllers\ClubPresident\AnnouncementController;
use App\Http\Controllers\ClubPresident\ClubWorkspaceController;

use App\Http\Controllers\ClubPresident\ClubDescriptionController;
use App\Http\Controllers\ClubPresident\DetailInformationController;
use App\Http\Controllers\ClubPresident\ActivityManagementController;
use App\Http\Controllers\ClubPresident\MemberRequestManagementController;
use Illuminate\Support\Facades\App;

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

// Route::prefix('admin')->group(function () {
//     Route::get('/', function () {
//         return view('admin.pages.admin.dashboard');
//     })->name('admin.dashboard');

//     Route::get('/clubs', function () {
//         return view('admin.pages.admin.club-list');
//     })->name('admin.clubs');

//     Route::get('/clubs/requests', function () {
//         return view('admin.pages.admin.club-request');
//     })->name('admin.club-requests');
// });

//Admin-club
// Route::get('/admin-club/login', function () {
//     return view('admin.pages.admin-club.club-admin-login');
// });

// Route::get('/admin-club', function () {
//     return view('admin.pages.admin-club.club-list2');
// })->name('admin.admin-club');

// Route::get('/admin-member2', function () {
//     return view('admin.pages.admin-club.admin-members');
// })->name('admin.admin-members');

// Route::get('/admin-notifications', function () {
//     return view('admin.pages.admin-club.admin-notifications');
// })->name('admin.admin-notifications');

// Route::get('/admin-notifications', function () {
//     return view('admin.pages.admin-club.admin-notifications');
// })->name('admin.admin-notifications');




Route::get('/admin-spending', function () {
    return view('admin.pages.admin-club.admin-spending');
})->name('admin.admin-spending');



Route::get('/club-request', function () {
    return view('admin.pages.admin.club-request');
})->name('admin.club-request');

Route::get('/admin-staff', function () {
    return view('admin.pages.admin-club.admin-staff');
})->name('admin.admin-staff');


Route::get('/Hoat-dong-sap-toi', fn() => view('client/pages/actives/actives'))->name('client.activities');
// homehome
Route::get('/Trang-chu', [HomeController::class, 'index'])->name('client.home');
//activeactive
// Route::get('/login', fn() => view('client/pages/login/login'))->name('client.login');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('client.login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('client.logout');

// Route::get('register', )->name('register'); 
Route::post('register', [RegisterController::class, 'register']);

Route::get('/Chi-tiet-cau-lac-bo/{clubId}',  [ClubController::class, 'index'])->name('client.details'); //->middleware('verified');

// Route for liking a club
Route::post('/clubs/{id}/like', [ClubController::class, 'like'])->name('clubs.like')->middleware('auth');

// Route::get('/Chi-tiet-cau-lac-bo', fn() => view('client/pages/clubs-details/details'))->name('client.details');
// form dk tv
Route::get('/Dang-ki-thanh-vien', fn() => view('client/pages/forms/form-member'))->name('client.form-member');

// dki tv
Route::get('/Dang-ki-tham-gia-CLB', fn() => view('client/pages/forms/form-member'))->name('client.form-member');

// dli tl clb
// Route::get('/Dang-ki-thanh-lap-clb', fn() => view('client/pages/forms/form-club'))->name('client.form-club');

// Route for showing the registration form
// Route::get('/clubs/register/{id}', [ClubController::class, 'showRegisterForm'])->name('clubs.showRegisterForm')->middleware('auth');

// // Route for handling the registration
// Route::post('/clubs/register/{id}', [ClubController::class, 'register'])->name('clubs.register')->middleware('auth');
// dki tk 
Route::get('/Dang-ki-tai-khoan', [RegisterController::class, 'showRegistrationForm'])->name('client.sign-up');

Route::post('/Dang-ki-tai-khoan', [RegisterController::class, 'register'])->name('client.sign-up.submit');

// Send mail verify
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/Trang-chu');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

// Route cho các hoạt động
Route::resource('Hoat-dong-sap-toi', ActivityController::class);
Route::get('/Hoat-dong-sap-toi', [ActivityController::class, 'index'])->name('client.activities');

// profile
Route::get('/edit-profile', fn() => view('client/pages/edit-profile/edit'))->name('client.edit');

// spennding
Route::get('/spending', fn() => view('client/pages/spending/spending'))->name('client.spending');

// members
Route::get('/members/{id_club}',  [\App\Http\Controllers\InformationController::class, 'members'])->name('client.members');

// notification
Route::get('/notification',[\App\Http\Controllers\NotificationController::class, 'index'] )->name('client.notifications');
Route::get('information-user', [\App\Http\Controllers\InformationController::class, 'index'])->name('client.information.user');

Route::get('/404', function () {
    abort(404);
});




// Route để hiển thị form đăng ký thành lập câu lạc bộ
Route::get('/club-requests/create', [ClubRequestController::class, 'create'])->name('club-requests.create')->middleware('auth');

// Route để xử lý việc lưu form đăng ký thành lập câu lạc bộ
Route::post('/club-requests/store', [ClubRequestController::class, 'store'])->name('club-requests.store');
// Route::get('/admin-club', fn() => view('admin/pages/admin-club/form-member'))->name('admin-club.form-member');


Route::get('/admin/clubs/approve/{id}', [MemberRequestManagementController::class, 'approve'])->name('admin.clubs.approve');
Route::get('/admin/clubs/details/{id}', [MemberRequestManagementController::class, 'show'])->name('admin.clubs.details');
Route::get('/admin/clubs/create', [MemberRequestManagementController::class, 'create'])->name('admin.clubs.create');
Route::get('/admin/clubs/edit/{id}', [MemberRequestManagementController::class, 'edit'])->name('admin.clubs.edit');
Route::delete('/admin/clubs/delete/{id}', [MemberRequestManagementController::class, 'destroy'])->name('admin.clubs.delete');
Route::get('/admin/clubs/spending', [MemberRequestManagementController::class, 'spending'])->name('admin.clubs.spending');
Route::get('/admin/clubs/report', [MemberRequestManagementController::class, 'report'])->name('admin.clubs.report');

// Member management routes
Route::get('/admin/members/approve', [MemberController::class, 'approve'])->name('admin.members.approve');
Route::get('/admin/members/list', [MemberController::class, 'list'])->name('admin.members.list');
Route::get('/admin/members/committee', [MemberController::class, 'committee'])->name('admin.members.committee');

// Spending management routes
Route::prefix('club-president')->name('club-president-')->group(function () {
    Route::resource('spending', SpendingController::class);
});


// Event management routes
Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.events.create');
Route::get('/admin/events/update', [EventController::class, 'update'])->name('admin.events.update');



// Spending management routes
Route::get('/admin/spending/income', [SpendingController::class, 'income'])->name('admin.spending.income');
Route::get('/admin/spending/expense', [SpendingController::class, 'expense'])->name('admin.spending.expense');
Route::get('/admin/spending/report', [SpendingController::class, 'report'])->name('admin.spending.report');


// web.php
Route::get('/club-registration', [ClubController::class, 'showRegistrationForm'])->name('club.registration');
Route::post('/club-registration', [ClubController::class, 'submitRegistration'])->name('club.submitRegistration');


// Route để hiển thị danh sách đăng ký tham gia câu lạc bộ
// Route::get('/admin/club-requests', [ClubRequestController::class, 'index'])->name('admin.club-requests');

// Route để hiển thị danh sách đăng ký tham gia câu lạc bộ
// Route::get('/admin/club-requests', [MemberRequestManagementController::class, 'index'])->name('admin.club-requests');

Route::get('/member-requests/create/{club_id?}', [MemberRequestController::class, 'create'])->name('member-requests.create')->middleware('auth');
Route::post('/member-requests/store', [MemberRequestController::class, 'store'])->name('member-requests.store')->middleware('auth');;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [ClubManagementController::class, 'index1'])->name('admin.dashboard');

    // Route::get('/', function () {
    //     // return view('admin.pages.admin.dashboard');
    //     return view('admin.pages.admin.club-list');
    // })->name('admin.dashboard');

    Route::get('/clubs', [ClubManagementController::class, 'index'])->name('admin.clubs');

    Route::patch('/clubs/{id}/update-president', [ClubManagementController::class, 'updatePresident'])->name('admin.clubs.updatePresident');
    Route::patch('/clubs/{id}/toggle-status', [ClubManagementController::class, 'toggleStatus'])->name('admin.clubs.toggleStatus');

    Route::get('/club-requests', [ClubManagementController::class, 'clubRequests'])->name('admin.club-requests');

    Route::patch('/club-requests/{id}/approve', [ClubManagementController::class, 'approve'])->name('admin.club-requests.approve');
    Route::patch('/club-requests/{id}/reject', [ClubManagementController::class, 'reject'])->name('admin.club-requests.reject');

    // Announcement management routes
    Route::get('/admin/announcements/create', [AnnouncementController::class, 'create'])->name('admin.announcements.create');
    Route::get('/admin/announcements/edit', [AnnouncementController::class, 'edit'])->name('admin.announcements.edit');
    Route::get('/admin/announcements/delete', [AnnouncementController::class, 'delete'])->name('admin.announcements.delete');
    Route::get('/admin/announcements/show', [AnnouncementController::class, 'show'])->name('admin.announcements.show');

    // Club description management routes
    Route::get('/admin/club-description/create', [ClubDescriptionController::class, 'create'])->name('admin.club-description.create');
    Route::get('/admin/club-description/edit', [ClubDescriptionController::class, 'edit'])->name('admin.club-description.edit');
    Route::get('/admin/club-description/delete', [ClubDescriptionController::class, 'delete'])->name('admin.club-description.delete');

    Route::get('notifications', [\App\Http\Controllers\Admin\NotificationController::class, 'index'])->name('admin.notifications');
    Route::patch('notifications-approved/{id}', [\App\Http\Controllers\Admin\NotificationController::class, 'approved'])->name('admin.notifications.approved');
    Route::patch('notifications-rejected/{id}', [\App\Http\Controllers\Admin\NotificationController::class, 'rejected'])->name('admin.notifications.rejected');
});

Route::middleware(['auth', 'admin-club'])->prefix('admin-club')->group(function () {

    Route::get('/admin-notifications', [NotificationController::class, 'index'])->name('admin.admin-notifications');
    Route::post('/admin-notifications', [NotificationController::class, 'store'])->name('admin.admin-notifications.store');
    Route::put('/admin-notifications/{notification}', [NotificationController::class, 'update'])->name('admin.admin-notifications.update');
    Route::delete('/admin-notifications/{notification}', [NotificationController::class, 'destroy'])->name('admin.admin-notifications.destroy');

    Route::get('/', [MemberRequestManagementController::class, 'member'])->name('admin-club');

    // Member management routes
    Route::get('/member', [MemberController::class, 'index'])->name('admin-club.members');
    Route::delete('/members/{id}', [MemberController::class, 'destroy'])->name('admin-club.members.delete');
    Route::patch('/members/{id}/update-role', [MemberController::class, 'updateRole'])->name('admin-club.members.updateRole');

    // Member Request management routes
    Route::get('/member-requests', [MemberRequestManagementController::class, 'member'])->name('admin-club.member-requests');
    Route::patch('/member-requests/approve/{id}', [MemberRequestManagementController::class, 'approve'])->name('admin-club.member-requests.approve');
    Route::patch('/member-requests/{id}/reject', [MemberRequestManagementController::class, 'reject'])->name('admin-club.member-requests.reject');
    Route::delete('/member-requests/{id}', [MemberRequestManagementController::class, 'deleteMemberRequest'])->name('admin-club.member-requests.delete');

    // Activity
    Route::get('/activities', [ActivityManagementController::class, 'index'])->name('admin-club.activities');
    Route::post('/activities', [ActivityManagementController::class, 'create'])->name('admin-club.activities.create');
    Route::patch('/activities/{id}', [ActivityManagementController::class, 'update'])->name('admin-club.activities.update');
    Route::delete('/activities/{id}', [ActivityManagementController::class, 'destroy'])->name('admin-club.activities.destroy');

    // Detail Club info
    Route::get('/information', [DetailInformationController::class, 'index'])->name('admin-club.information');
    Route::patch('/information/update-images/{id}', [DetailInformationController::class, 'updateImages'])->name('admin-club.information.update-images');
    Route::patch('/information/update-overview/{id}', [DetailInformationController::class, 'updateOverview'])->name('admin-club.information.update-overview');
    Route::patch('/information/update-description/{id}', [DetailInformationController::class, 'updateDescription'])->name('admin-club.information.update-description');
    Route::post('/information/upload-resource', [DetailInformationController::class, 'uploadResource'])->name('admin-club.information.upload-resource');

    Route::get('/spendings', [SpendingController::class, 'index'])->name('admin-club.spendings');
    Route::post('/spendingss/create', [SpendingController::class, 'store'])->name('admin-club.spendings.create');
    Route::patch('/spendings/update/{id}', [SpendingController::class, 'update'])->name('admin-club.spendings.update');

    Route::get('/select-club/{clubId}', [ClubWorkspaceController::class, 'selectClub'])->name('admin-club.workspace.select');
    // Route::prefix('club-president')->name('club-president-')->group(function () {
    //     Route::resource('spending', SpendingController::class);
    // });
});
