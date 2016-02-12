<?php

// namespace App\Http\Controllers\Auth;
//
// use App\User;
// use Validator;
// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\ThrottlesLogins;
// use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
// use Illuminate\Http\Request;
// use Auth;
//
// class AuthController extends Controller
// {
//     /*
//     |--------------------------------------------------------------------------
//     | Registration & Login Controller
//     |--------------------------------------------------------------------------
//     |
//     | This controller handles the registration of new users, as well as the
//     | authentication of existing users. By default, this controller uses
//     | a simple trait to add these behaviors. Why don't you explore it?
//     |
//     */
//
//     use AuthenticatesAndRegistersUsers, ThrottlesLogins;
//
//     /**
//      * Where to redirect users after login / registration.
//      *
//      * @var string
//      */
//     protected $redirectTo = '/home';
//
//     /**
//      * Create a new authentication controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest', ['except' => 'logout']);
//     }
//
//     /**
//      * Get a validator for an incoming registration request.
//      *
//      * @param  array  $data
//      * @return \Illuminate\Contracts\Validation\Validator
//      */
//     protected function validator(array $data)
//     {
//         return Validator::make($data, [
//             'name' => 'required|max:255',
//             'email' => 'required|email|max:255|unique:users',
//             'password' => 'required|confirmed|min:6',
//         ]);
//     }
//
//     /**
//      * Create a new user instance after a valid registration.
//      *
//      * @param  array  $data
//      * @return User
//      */
//     protected function create(array $data)
//     {
//         return User::create([
//             'name' => $data['name'],
//             'email' => $data['email'],
//             'password' => bcrypt($data['password']),
//         ]);
//     }
//
//
//
//     public function getLogin(){
//         $theme = \Theme::uses('itim_world')->layout('default');
//         return $theme->scope("account.login")->layout('blank')->render();
//
//     }
//
//
//     public function handle_login(AuthenticateUser $authenticateUser, Request $request, $provider = null){
//         return $authenticateUser->execute($request->all(), $this, $provider);
//     }
//
//     public function getLogout(){
//         die();
//         $this->auth->logout();
//         Session::flush();
//         return redirect('/');
//     }
//
// }
//
namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Repositories\AccountRepositoryInterface;

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

    protected $AccountRepository;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //parent::__construct();
        //$this->AccountRepository = $AccountRepository;
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
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
            'name_th' => 'required|max:255',
            'lastname_th' => 'required|max:255',
            'citizen_id' => 'required|max:13|unique:wip8_profiles',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'provider' => 'required'
        ]);
    }


    public function getLogout()
    {
        \Auth::logout();
        \Session::flush();
        return redirect('auth/login');
    }

        public function getLogin(){
            $theme = \Theme::uses('itim_world')->layout('default');
            return $theme->scope("account.login")->layout('blank')->render();

        }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        // $user = User::create([
        //             'email' => $data['email'],
        //             'password' => bcrypt($data['password']),
        //         ]);
        // $user = $this->AccountRepository->createAccount($data);

        $AccountRepository = \App::make('App\Repositories\AccountRepositoryInterface');
        $user = $AccountRepository->createAccount($data);
        return $user;
    }

    protected function authenticated(){
        // process after login
        $this->redirectTo = "/profile";
        //dd(\Auth::user());
        return redirect($this->redirectTo);
    }

    public function getConnect($provider){
        if($provider == 'facebook'){
            return \Socialite::driver($provider)->redirect();
        }
        // return redirect('auth/login');
        //echo $provider;
    }

    public function getProcess_login($provider){
        $social_data = \Socialite::driver($provider)->user();
        $user_data = json_decode(json_encode($social_data),true);

        $AccountRepository = \App::make('App\Repositories\AccountRepositoryInterface');
        $user = $AccountRepository->findSocialUser($user_data, $provider);

        if(!$user){
            //register new user
            $view = array(
                'user' => $user_data,
                'provider' => $provider
            );

            $theme = \Theme::uses('itim_world')->layout('default');
            return $theme->scope('account.regisSimple', $view)->layout('blank')->render();
        }
        dd($user);




        //dd($social_data);
    }
}
