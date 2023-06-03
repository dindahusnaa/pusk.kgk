<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KIA\KIAMainController;
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
Route::get('/unauthorized', function(){
    return view('error/unauthorize');
})->name('unauthorized');

//====================== Public Login ======================//

//UKM Login
Route::get('/login/ukm', [UKMLoginController::class, 'index']);
Route::post('/login/ukm', [UKMLoginController::class, 'ukmLogin']);



//Route yang memiliki middleware untuk sanitasi input dan otorisasi
//Setting middleware di app/Kernel.php
Route::group(['middleware' => ['auth', 'XssSanitization',  'InputSanitasi',]], 
function(){

    Route::get('/logout', [DashboardController::class, 'logout']);
    
    
    /**
     * Untuk setiap route cek cek di db tb_akses
     * apakah divisinya punya akses atau tidak
     * dan tolong gunakan contoh route yang sudah disediakan
     */

    //Route Group UKMP
    Route::group(['middleware' => ['auth_role']], 
    function(){
        Route::get('/ukm/dashboard', [UKMMainController::class, 'index']);
    })->prefix('ukm');
    
    //Route Group TU
    Route::group(['middleware' => ['auth_role']], 
    function(){
        Route::get('/tu/dashboard', [UKMMainController::class, 'index']);
    })->prefix('tu');

    //Route Group KIA
    Route::group(['middleware' => ['auth_role']], 
    function(){
        Route::get('/kia/dashboard', [KIAMainController::class, 'index']);
    })->prefix('kia');

    //Route Group Poli
    Route::group(['middleware' => ['auth_role']], 
    function(){
        Route::get('/poli/dashboard', [UKMMainController::class, 'index']);
    })->prefix('poli');

    //Route Group Lab
    Route::group(['middleware' => ['auth_role']], 
    function(){
        Route::get('/lab/dashboard', [UKMMainController::class, 'index']);
    })->prefix('lab');

    
});

