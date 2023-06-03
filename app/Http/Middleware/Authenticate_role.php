<?php
namespace App\Http\Middleware;
use Closure;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

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
        
        if(!session()->get('is_login') == true){
            return redirect()->route('/');
            // dd($token);
        }

        return $next($request);

    }
}
