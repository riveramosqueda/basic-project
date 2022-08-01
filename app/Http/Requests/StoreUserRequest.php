<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => __('Field Name is required'),
            'name.max' => __('Caracters in field Name must be below 255'),
            'email.required' => __('Field Email is required'),
            'email.unique' => __('Field Email must be unique'),
            'email.max' => __('Caracters in field Email must be below 255'),
        ];
    }
}
