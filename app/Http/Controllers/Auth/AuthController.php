<?php

namespace App\Http\Controllers\Auth;

use App\Login;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Input;
use DB;
use Response;

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

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator()
    {
        return Validator::make(Input::all(), [
            'username' => 'required|max:255',
            'password' => 'required|min:3|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Login::create([
            'username' => $data['username'],
            'password' => $data['password'],
        ]);
    }
    public function login(){
        return view('index');
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
        ];

        
        if(!Auth::attempt($credentials))
        {
            Session::flash('flash_error','Wrong username/password!');
            return Response::json(array('success' => false));
            //return redirect()->back();
        }
        
       
            Session::flash('flash_message','Logged in!');
            //return redirect('home');
            return Response::json(array('success' => true));      
    }  

}
