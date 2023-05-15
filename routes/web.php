<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TaskAssignmentController;
use App\Http\Controllers\ResourceAllocation;

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
    return view('homepage');
})->name('homepage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('invites', [App\Http\Controllers\InvitationController::class, 'create'])->name('invites.invite');
Route::get('invites.invite_email', [App\Http\Controllers\InvitationController::class, 'index'])->name('invites.invite_email');
Route::post('invites', [App\Http\Controllers\InvitationController::class, 'store'])->name('invites.store');

Route::resource('teams', TeamController::class);

Route::resource('tasks', TaskAssignmentController::class);

Route::resource('resources', ResourceAllocation::class);
