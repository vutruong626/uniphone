<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ 
            'username' => 'required|unique:users,username',
            'email' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/   '
            'password' =>  'required',
            'Repassword' => 'required|same:password'
        ];
    }
    public function messages(){
        return [
            'username.required'     => 'please enter username',
            'username.unique'       => 'usr is exists',

            'email.required'        => 'please enter email',
            'email.regex'           => ' email error syntax',
            
            'password.required'     => 'please enter password',
            'Repassword.required'   => 'please enter Repassword',
            'Repassword.same'       => 'two password don\'t match',
        ];
    }
}
