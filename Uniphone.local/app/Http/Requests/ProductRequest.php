<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'parent'     => 'required'
            'text-input' => 'required|unique:status,title',
            'file-input' => 'required'

        ];
    }

    public function messages(){
        return [
            'parent.required' => 'please choose category',
            'text-input.required' => 'please choose produc',
            'text-input.unique' => 'product name is exist',
            'file-input.required' => 'please choose file'
        ];
    }

}
