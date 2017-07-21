<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/dashboard';

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
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
        $user = User::create([
            'first_name' => $data['first_name'],
			'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
		
		if ($user)
		{
			\App\Helpers\CustomHelper::sendVerificationEmail($user->id);
			
			return Redirect::to('/')->with('success_message', \App\Helpers\CustomHelper::lang('lang-verification-sent'));
		}
		
		////return $user;
    }
	
	
	/*public function postLogin(Request $request)
    {
		echo "Sorry man! no entry this time!";
		exit;
		
        ////return $this->login($request);
    }*/
	
	public function login(Request $request)
    {
		$validator = Validator::make($request->all(), [
			'email' => 'required|email', 'password' => 'required',
		]);

		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		}
				
		$user = \App\User::where('email', $request->email)->first();
		if ($user)
		{
			if (!$user->email_verified)
			{
				return Redirect::to('/')->with('error_message', \App\Helpers\CustomHelper::lang('lang-verification-sent'));
			}else{
				$credentials = $request->only( 'email', 'password' );
				if (Auth::attempt($credentials, $request->has('remember')))
				{
					return Redirect::to($this->redirectTo);
				}
			}
		}
		
		return Redirect::to('/')->with('error_message', \App\Helpers\CustomHelper::lang('lang-no-access'));
	}
	
	
	public function register(Request $request)
    {
		$validator = Validator::make($request->all(), [
			'first_name' => 'required|min:5',
			'last_name' => 'required|min:5',
			'email' => 'required|email|min:5',
			'password' => 'required|min:5|confirmed',
			'password_confirmation'=> 'required|min:5'
		]);

		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		}
		
		$this->create($request->all());
		
		
        /*$validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        Auth::guard($this->getGuard())->login($this->create($request->all()));

        return redirect($this->redirectPath());*/
    }
	
	
}
