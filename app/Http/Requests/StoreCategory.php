<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:categories|max:25',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'This field Name is required.',            
            'name.max' => 'This field Name allow only 25 string max.',
            'name.unique' => 'This field Name is already has.',
        ];
    }
}
