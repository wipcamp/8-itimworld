<?php
namespace App\Repositories;
use App\User;
use Hash;
use App\Models\Wip8_profile;

class UserRepository {
    
    public function __construct(){
        $this->profile = new Wip8_profile();
    }
    
    public function findByUserNameOrCreate($userData, $provider) {
        $user = User::where('provider_id', '=', $userData->id)->first();
        if(!$user) {
            $user = User::create([
                'provider_id' => $userData->id,
                'name' => $userData->name,
                //'username' => $userData->nickname,
                'email' => $userData->email,
                'avatar' => $userData->avatar,
                'active' => 1,
                'provider' => $provider,
                'role' => 1    
            ]);
        }
        $this->checkIfUserNeedsUpdating($userData, $user);
        return $user;
    }
    
     public function findByUserName($userData, $provider) {
        $user = User::where('provider_id', '=', $userData->id)->first();
        if(!$user) {
                echo "NO USER !!!";
        }
    }
    
    public function validateByEmail($user_data, $provider){
        $hash_password = Hash::check(array_get('$user_data', 'password', ''),$this->profile->where(array("email" => array_get('$user_data', 'email', '')))->get("password"));
        $where_claue = array("email" => array_get('$user_data', 'email', ''),
                             "password" => $hash_password);
        $user = User::where($where_claue)->first();
        return $user;
    }
    
    
    public function checkIfUserNeedsUpdating($userData, $user) {
        $socialData = [
            'avatar' => $userData->avatar,
            'email' => $userData->email,
            'name' => $userData->name,
            //'username' => $userData->nickname,
        ];
        $dbData = [
            'avatar' => $user->avatar,
            'email' => $user->email,
            'name' => $user->name,
            //'username' => $user->username,
        ];
        if (!empty(array_diff($socialData, $dbData))) {
            $user->avatar = $userData->avatar;
            $user->email = $userData->email;
            $user->name = $userData->name;
            //$user->username = $userData->nickname;
            $user->save();
        }
    }
}
