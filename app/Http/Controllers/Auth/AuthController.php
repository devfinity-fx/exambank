<?php namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Registrar;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use App\Library\TokenGenerator;
use Auth;
use Mail;
use Validator;
use Redirect;
use Carbon\Carbon ;

class AuthController extends Controller {

    /**
     * Show the login
     *
     * @return view Login
     */
    public function loginForm()
    {
        if (Auth::check()) {

            return Redirect::to('/');
        }
        $data = ['header'   =>  'Authentication Required',
                 'message'  =>  'You have to be logged in to access the site.',
                 'icon'     =>  'info'];

        return view('pages.login', compact('data'));
    }

    /**
     * Attemp the user to login
     * and authenticate
     *
     * @param UserLoginRequest $request
     * @return User credentials
     */
    public function loginAuth(UserLoginRequest $request)
    {

        if(!isset($input['Remember'])){
            $remember = false;
        }else{
            $remember = true;
        }


        $values = [
            'email' => $request->input('Email'),
            'password' => $request->input('Password')
        ];

        $login = Auth::attempt($values, $remember);

        if($login){
            return Redirect::to('/');
        }else{

            return redirect()->back()->withInput($request->only('Email', 'Remember'))->withErrors(['Username or Password Incorrect']);
        }
    }


    /**
     * Logout to flush or destroy the current session
     *
     */
    public function logoutAuth()
    {
        Auth::logout();

        return redirect('/login');
    }


}
