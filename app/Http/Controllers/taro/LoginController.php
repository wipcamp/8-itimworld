<?php namespace App\Http\Controllers\taro;
     use Auth;
     use Illuminate\Routing\Controller; 
     use App\Http\Requests\taro\LoginRequest; 
 
class LoginController extends Controller {
   public function getIndex(){
      if(Auth::check()){
        return redirect('/taro/index');
      }else{
        return view('taro.login');
      }
   }
 public function postProcess(LoginRequest $request){
      $username = $request->input('username');
      $password = $request->input('password');
      if(Auth::attempt(['username' => $username,'password'=>$password,'type'=>'admin'],$request->has('remember'))){
           return redirect()->intended('/taro/index');
      }else{
           return redirect()->back()->with('message',"Error!! Username or Password Incorrect. \nPlease try again.");;
      }
 }
 public function getLogout(){
      Auth::logout();
      return redirect('/taro/login');
 }
}