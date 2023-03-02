<?php

use App\Http\Controllers\admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\admin\Auth\NewPasswordController;
use App\Http\Controllers\admin\Auth\PasswordController;
use App\Http\Controllers\admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\admin\Auth\RegisteredUserController;
use App\Http\Controllers\admin\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect('admin/dashboard');
// });
Route::view('admin/dashboard','admin.dashboard');
// login
// Route::middleware('guard'=>'admin')->group(function () {
Route::get('admin/login', [AuthenticatedSessionController::class, 'create']);
Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);

//register
Route::get('admin/register', [RegisteredUserController::class, 'create'])->name('admin.register');
Route::post('admin/register', [RegisteredUserController::class, 'store']);

//forgot-password

Route::get('admin/forgot-password', [PasswordResetLinkController::class, 'create'])->name('admin.password.request');
Route::post('admin/forgot-password', [PasswordResetLinkController::class, 'store'])->name('admin.password.email');

// reset-password
Route::get('admin/reset-password', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('admin/reset-password.post', [NewPasswordController::class, 'store'])->name('admin.password.store');


Route::get('admin/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->name('verification.notice');
// });
Route::get('admin/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('admin/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('admin.verification.send');

Route::get('admin/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->name('admin.password.confirm');

Route::post('admin/confirm-password', [ConfirmablePasswordController::class, 'store'])->name('admin.password.confirm.post');

Route::put('admin/password', [PasswordController::class, 'update'])->name('password.update');

Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
