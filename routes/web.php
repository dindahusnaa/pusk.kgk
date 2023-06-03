<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UKM\UKMLoginController;
use App\Http\Controllers\UKM\UKMMainController;

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
//     return view('welcome');
// });
/**
 * Public Routes
 * Route yang diakses oleh semua user
 * tanpa login
 */

Route::get('/', [DashboardController::class, 'index'])->name('/');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/visi-misi', [DashboardController::class, 'visi_misi']);
Route::get('/profil', [DashboardController::class, 'profil']);
Route::get('/layanan', [DashboardController::class, 'layanan']);
Route::get('/kontak', [DashboardController::class, 'kontak']);

//====================== Public Login ======================//

//UKM Login
Route::get('/login/ukm', [UKMLoginController::class, 'index']);
Route::post('/login/ukm', [UKMLoginController::class, 'ukmLogin']);



//Route yang memiliki middleware untuk sanitasi input dan otorisasi
//Setting middleware di app/Kernel.php
Route::group(['middleware' => ['auth', 'auth_role', 'XssSanitization',  'InputSanitasi',]], 
function(){

    Route::get('/logout', [DashboardController::class, 'logout']);
    //Route ke halaman UKM
    
    Route::get('/ukm/dashboard', [UKMMainController::class, 'index']);
});

