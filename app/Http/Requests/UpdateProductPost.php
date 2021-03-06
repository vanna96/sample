<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductPost extends FormRequest
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
        $id = $this->route()->parameters['product'] ?? null; 
        return [
            'name' => 'required|max:50|unique:products,name,'. $id,
            'price' => 'required|numeric|min:0|max:999999',
            'status' => 'required|numeric|between:0,1',
            'description' => 'required|max:1000',
            'category' => 'required|numeric|exists:categories,id',
            'profile' => 'nullable|mimes:jpeg,jpg,png|max:2000',
        ];
    }
}
