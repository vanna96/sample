<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(\Auth::check()){
            return true;
        }else{
            false;
        };
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'price' => 'required|numeric|min:0|max:999999',
            'status' => 'required',
            'description' => 'required|max:255',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'This field Name is required',            
            'name.max' => 'This field Name allow only 50 string max',
            'price.required' => 'This field Price is required',
            'price.digits' => 'This field Price allow only 8 number',
            'status.required' => 'This field Status is required',
            'description.required' => 'This field Description is required',
        ];
    }
}
