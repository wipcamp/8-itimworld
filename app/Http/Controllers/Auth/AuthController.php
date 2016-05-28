<?php
namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Repositories\AccountRepositoryInterface;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/posttest';

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
        if(array_get($data, 'provider') == 'email'){
            $val = Validator::make($data, [
                'name_th' => 'required|max:255',
                'lastname_th' => 'required|max:255',
                'citizen_id' => 'required|max:13',
                'email' => 'required_if:provider,email|email|max:255|unique:users',
                'password' => 'required|min:6',
                'provider' => 'required'
            ]);
        }else{
            $val = Validator::make($data, [
                'name_th' => 'required|max:255',
                'lastname_th' => 'required|max:255',
                'citizen_id' => 'required|max:13',
                'provider' => 'required'
            ]);
        }

        return $val;
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
        $AccountRepository = \App::make('App\Repositories\AccountRepositoryInterface');
        if($data['provider'] == 'email'){
            $data['status'] = 2;
            $user = $AccountRepository->createAccount($data);
            $AccountRepository->sendMailVerifyAccount($user);
        }else{
            $user = $AccountRepository->updateSocialAccount($data);
        }
        $AccountRepository->initialProfile($user);
        return $user;
    }

    protected function authenticated(){
        $this->redirectTo = "/posttest";
        return redirect($this->redirectTo);
    }

    public function getConnect($provider){
        if($provider == 'facebook'){
            return \Socialite::driver($provider)->redirect();
        }
    }

    public function getProcess_login(Request $Request, $provider){

        $social_data = \Socialite::with($provider)->user();
        $user_data = json_decode(json_encode($social_data),true);

        $AccountRepository = \App::make('App\Repositories\AccountRepositoryInterface');
        $user = $AccountRepository->findSocialUser($user_data, $provider);

        if(!$user){
            return redirect('auth/login');
            // //register new user
            // $view = array(
            //     'user' => $user_data,
            //     'provider' => $provider
            // );


            // $data = array(
            //     'name_th'   => array_get($user_data, 'user.first_name'),
            //     'lastname_th'   => array_get($user_data, 'user.last_name'),
            //     'email'   => array_get($user_data, 'email'),
            //     'provider'   => 'facebook',
            //     'provider_id'   => array_get($user_data, 'id'),
            //     'avatar'   => array_get($user_data, 'avatar'),
            //     'provider_token'   => array_get($user_data, 'token'),
            //     'status'    => 1,
            //     'active'    => 1
            // );

            // $AccountRepository = \App::make('App\Repositories\AccountRepositoryInterface');
            // $new_user = $AccountRepository->createAccount($data);

            // return redirect("/account/register/".$new_user->wip_id);

            //$theme = \Theme::uses('itim_world')->layout('default');
            //return $theme->scope('account.regisSimple', $view)->layout('blank')->render();
        }else{
            $status = array_get($user, 'status', 0);
            if($status == 1){
                return redirect('auth/login');
                //return redirect("/account/register/".$user->wip_id);
            }else if($status == 2){
                \Auth::login($user);
                return redirect("/posttest");
            }
        }

        return redirect("/auth/login");
    }
}
