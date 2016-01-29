<?php namespace App\Http\Requests\taro;
      use Illuminate\Foundation\Http\FormRequest;
class LoginRequest extends FormRequest {
 
      public function rules(){
           return [
             'username' => 'required',
             'password' => 'required'
            ];
      }
 
      public function authorize(){
           return true;
      }
}
