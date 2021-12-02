<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeLoginController extends Controller
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('frontVerify')->except('logout');
    }

    public function username()
    {
        return 'name';
    }
    public function signUp(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|string',
            ]);
            $data = User::query()->where(['name' => $request->input('name')])->first();
            if ($data){
                throw ValidationException::withMessages([
                    $this->username() => "계정이 이미 존재하다",
                ]);
            }
            $insertdata = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'user_status' => 2
            ];
            User::query()->create($insertdata);
            return redirect('/login');
        }catch (\Exception $exception){
            throw $exception;
        }

    }

    public function login(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);


        $user = User::query()->where('user_status', '2')
            ->where($this->username(), $request->input("name"))
            ->first();
        if (!$user) {
            throw ValidationException::withMessages([
                $this->username() => "사용자가 존재하지 않다",
            ]);
        } else {
            if(Hash::check($request->input("password"),$user->password)){
                $session = new Session();
                $session->set('id', $user->id);
                $session->set('username', $user->name);
                $session->set('email', $user->email);
                return redirect("/");
            } else {
                throw ValidationException::withMessages([
                    $this->username() => "비밀번호가 틀렸다",
                ]);
            }

        }


//
//        if ($this->guard()->attempt($request->only($this->username(),"password"))) {
//            return redirect("/");
//        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function loggedOut(Request $request)
    {
        return redirect('/');
    }
    public function changeLocale($locale)
    {
        if (in_array($locale, ['en', 'zh'])) {
            session()->put('locale', $locale);
        }
        return redirect()
            ->back()
            ->withInput();

    }
}
