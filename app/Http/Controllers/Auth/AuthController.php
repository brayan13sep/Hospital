<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;

        $this->middleware('guest', ['except' => 'getLogout']);
    }


           public function getLogin()
    {
        //return view('auth.login');
                return view('login');
    }

        public function postLogin(Request $request)
    {
        $this->validate($request, [
            'usuario' => 'required', 'password' => 'required',
        ]);

                //added

              //  echo 'made it here====   ';
            $tvar = $request->input('usuario');
            //echo $tvar.' ';
            $pw = Hash::make($request->input('password'));
            //echo $pw.' ';
            //echo "".$this->auth->attempt(['password' => $pw])."";
            if ($this->auth->attempt(['usuario' => $tvar, 'password' =>$pw]))
        {
                   // echo 'logged in========'.$request->user->usuario;
                    //echo 'logged in========'.$request->user()->usuario;
                    //$yourvar = $request->user()->usuario;
                    //echo $yourvar;
                    //echo "====loggin in now";
                    return redirect('/hospital/public/certificados');
        }
            else
                {
                   //Log::debug('Log something');
                    //echo ' not logged in '.$tvar.'  '.$pw;
                    return redirect('\hospital\public\login');
                }

                //added

    $credentials = $request->only('usuario', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            return redirect($this->redirectPath());
        }

        return redirect('\hospital\public\login')
                    ->withInput($request->only('usuario'))
                    ->withErrors([
                        'usuario' => 'These credentials do not match our records.',
                    ]);
    }

        public function getLogout()
    {
        $this->auth->logout();

        return redirect('/');
    }
}
