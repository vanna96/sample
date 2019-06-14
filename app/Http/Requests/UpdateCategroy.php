<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategroy extends FormRequest
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
        $id = $this->route()->parameters['category'] ?? null;
        return [
            'name' => 'required|min:5|max:25|unique:categories,name,'. $id,
        ];
    }
}