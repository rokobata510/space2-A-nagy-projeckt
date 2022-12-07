<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;
use App\Http\Controllers\Controller;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/{tab?}', function ($tab="users") {
    if(!Auth::user()->isAdmin)
        return Redirect::to("dashboard");
    return view('layouts/admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/admin/users/delete/{id?}', function ($id="null") {
    if(!Auth::user()->isAdmin)
        return Redirect::to("dashboard");
    $user = User::findOrFail($id);
    $user->delete();
    return Redirect::route('admin')->with('global', 'Your account has been deleted!');
})->middleware(['auth', 'verified']);

Route::get('/admin/users/admin/{id?}', function ($id="null") {
    if(!Auth::user()->isAdmin)
        return Redirect::to("dashboard");
    DB::update('update users set isAdmin = true where Id = ?', [$id]);
    return Redirect::route('admin', ["users"])->with('global', 'Your account has been updated!');
})->middleware(['auth', 'verified']);

// újra kidolgozás
/*Route::get('/admin/new/submit', function (Request $request) {
    DB::insert("insert into admins (name, password) values (?,?)", [$request->input('name'), Hash::make($request->input('password'))]);
    return view('/layouts/admin', ["tab" => "new"]);
})->middleware(['auth', 'verified']); */


Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
