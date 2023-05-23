<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            // Validasi field Username
            'password' => 'required|string|min:6',
            //Validasi field Password dengan minimal 6 kata
        ]);

        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        // Validasi authentication menggunakan inputan username dan mencocokkan pada email yang telah terdaftar

        $login = [
            // Menampung informasi login, dan mengambil hasil pengecekan dari atas
            $loginType => $request->username,
            'password' => $request->password
        ];


        if (auth()->attempt($login)) {
            // Melakukan proses login 
            return redirect()->route('home');
            // Jika proses login berhasil maka redirect ke halaman home
        }

        return redirect()->route('login')->with(['error' => 'Email/Password salah']);
        // jika proses login gagal maka akan dialihkan ke login dan memunculkan notifikasi 
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}