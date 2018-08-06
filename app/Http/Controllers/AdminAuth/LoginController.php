<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
    protected $redirectTo = '/admin/dashboard';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.guest')->except('logout');
    }
    public function showLoginForm(){
        return view('adminauth.login');
    }
    /*//ghi de file showLoginForm thay cho mac dinh login
    public function showLoginForm(){
        return 'hello';
    }*/

    public function logout(Request $request){
        $this->guard('admin')->logout();
        $request->session()->invalidate();
        return redirect('admin/login');
    }
   /* public function username(){
        
        $login = request()->input('username');
       $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
       request()->merge([$field => $login]);
       return $field;
    }*/
    protected function guard(){
        return Auth::guard('admin');
    }
}
