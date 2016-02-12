<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Contracts\Auth\Guard;
//use Laravel\Socialite\Contracts\Factory as Socialite;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Socialite;
use Input;
use Auth;
use Hash;
use Session;
use App\Models\Wip8_profile;

class AuthenticateUser {
     private $socialite;
     private $auth;
     private $users;
     protected $profile;
     public function __construct(Socialite $socialite, Guard $auth, UserRepository $users) {
        $this->socialite = $socialite;
        $this->users = $users;
        $this->auth = $auth;
        $this->profile = new Wip8_profile();
    }
    
    public function execute($request, $listener, $provider) {
//        if (!$request) return $this->getAuthorizationFirst($provider);
//        $user = $this->users->findByUserNameOrCreate($this->getSocialUser($provider), $provider);
//        $this->auth->login($user, true);
//        return $listener->userHasLoggedIn($user);
        
         if (!$request && $provider != "email" ) return $this->getAuthorizationFirst($provider);
        if($provider == "email"){
           //$user = $this->users->findByEmail($request,$provider);

            $user_data = array( 'email' => array_get($request, 'email', ''),
                               'password' => array_get($request, 'password', ''));
//            $user = $this->users->validateByEmail($user_data, $provider);
            $user = Auth::attempt($user_data);
//            echo Hash::make(array_get($request, 'password', ''));
//            dd($user);
            $result = $this->profile->where('email',array_get($request, 'email'))->get();
            $data = json_decode($result,true);
            Session::push('user',$result);
            $value = Session::get('user');
            
            if($user){
                echo "PASS";
                echo $value;
                echo $data;
            }else{
                echo "FAIL";
            }
        }else{
           $social_data = Socialite::driver($provider)->user();
           $user = $this->users->findByUserName($social_data, $provider);
           dd($user);
        }
        
        
        
    }
    
    private function getAuthorizationFirst($provider) {
        return Socialite::driver($provider)->redirect();
    }
    private function getSocialUser($provider) {
        return $this->socialite->driver($provider)->user();
    }
}
