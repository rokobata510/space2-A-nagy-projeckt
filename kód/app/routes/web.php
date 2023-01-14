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
use App\Http\Controllers\cropper;
use Intervention\Image\ImageManager;
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
$imageid=0;
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

//account törlese
Route::get('/admin/users/delete/{id?}', function ($id="null") {
    if(!Auth::user()->isAdmin)
        return Redirect::to("dashboard");
    $user = User::findOrFail($id);
    $user->delete();
    return Redirect::route('admin')->with('global', 'Your account has been deleted!');
})->middleware(['auth', 'verified']);

//admin jog adás
Route::get('/admin/users/admin/{id?}', function ($id="null") {
    if(!Auth::user()->isAdmin)
        return Redirect::to("dashboard");
    DB::update('update users set isAdmin = true where Id = ?', [$id]);
    return Redirect::route('admin', ["users"])->with('global', 'Your account has been updated!');
})->middleware(['auth', 'verified']);

//admin jog elvétel
Route::get('/admin/users/unadmin/{id?}', function ($id="null") {
    if(!Auth::user()->isAdmin)
        return Redirect::to("dashboard");
    DB::update('update users set isAdmin = false where Id = ?', [$id]);
    return Redirect::route('admin', ["users"])->with('global', 'Your account has been updated!');
})->middleware(['auth', 'verified']);

//kép törlese
Route::get('/admin/images/deleteimg/{id?}', function ($id="null") {
    if(!Auth::user()->isAdmin)
        return Redirect::to("dashboard");
        DB::delete('DELETE FROM images WHERE id = ?', [$id]);
    return Redirect::route('admin', ["images"])->with('global', 'This img has been deleted!');
})->middleware(['auth', 'verified']);

Route::get('/image', function () {
    //sql connection adatok
$servername = "localhost";
$username = "root";
$password = "";
$database = "laravel";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$arr = [];
$sql = "SELECT id, url FROM images";
$result = $conn->query($sql);
//ha ad vissza valamit a $sql lekérdezés, akkor $resultimg lesz az
//tesztelés idejére csak egy visszaadott képet kezel
if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		array_push($arr, $row);
	}
} else {
	echo "0 results";
}
$conn->close();

//random choice url_arr-bol
$i = rand(0, sizeof($arr)-1);
$resultimg = $arr[$i];

//$resultimg egy tárolt url string
//kivesszük az értékét
//képet csinálunk a stringből
//$im = str_replace('data:image/png;base64,', '', (file_get_contents($resultimg)));

return '<img class="flex flex-col items-center min-w-auto max-h-52 max-w-52" src="'.$resultimg["url"].'">';
})->name("image");

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

Route::post("/dashboard",function (Request $req) {
    $sol = $req->sol;
    $text = $req->text;
    if ($sol == $text) {
        return redirect("siker");
    }
});
Route::view("/siker","siker");

require __DIR__.'/auth.php';
