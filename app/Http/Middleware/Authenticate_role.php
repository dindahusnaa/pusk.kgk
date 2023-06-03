<?php
namespace App\Http\Middleware;
use Closure;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class Authenticate_Role extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    // protected function redirectTo(Request $request): ?string
    // {
    //     return $request->expectsJson() ? null : route('login');
    // }
    
    /**
     * Buat Middleware untuk mengecek apakah user punya akses atau tidak
     * berdasarkan data dari database
     * sementara untuk sekarang, kita buat middleware untuk mengecek apakah user
     * sudah login atau belum
     */

    public function handle($request, Closure $next, ...$guards)
    {
        // $token = DB::table('user')->select('_token')->where('_token', session()->get('_token'))->first();
        
        $prefix = (Request::segment(1));
;
        $username = session()->get('username');
        $kode_divisi = session()->get('kode_divisi');

        $isPermit = DB::select("SELECT IFNULL(u.username, 0) AS isPermit 
                                FROM tb_akses ta 
                                JOIN ms_divisi md on md.kode_divisi = ta.kode_divisi 
                                JOIN users u on u.kode_divisi = md.kode_divisi 
                                WHERE u.username = '$username'
                                AND md.kode_divisi = '$kode_divisi'
                                AND ta.route = '$prefix'
                                LIMIT 1");
        
        if(count($isPermit) == 0){
            $isPermit = (object) [
                'isPermit' => 0
            ];
        }else{
            $isPermit = (object) [
                'isPermit' => 1
            ];
        }
        
        //jika belum login atau tidak punya akses
        if(!session()->get('is_login') == true){
            //kembali ke route dengan nama /
            return redirect()->route('/');
            // dd($token);
        }

        if($isPermit->isPermit == 0){
            //kembali ke route dengan nama unauthorized
            return redirect()->route('unauthorized');
        }

        return $next($request);

    }
}
