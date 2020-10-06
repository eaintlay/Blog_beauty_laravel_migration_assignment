<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
       // $this->middleware('guest')->except('logout');
    }*/

     
    protected $redirectTo = '/allcategorypage';

    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function loggedOut(Request $request)
    {
        return redirect()->route('login');
    }

    /*protected function authenticated(Request $request, $user)
    {
        // User role
        //$roles = auth()->$user->getRoleNames();

        // Check user role
        switch ($roles[0]) {
            case 'admin':
                    return redirect()->route('dashboard');
                break;
            default:
                    return redirect()->route('homepage'); 
                      break;
        }*/
}
