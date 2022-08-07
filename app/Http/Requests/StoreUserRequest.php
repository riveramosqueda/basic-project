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
            'email' => 'required|email|unique:users|max:255',
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
            'name.required' => __('users.create.validations.name_required'),
            'name.max' => __('users.create.validations.name_max'),
            'email.required' => __('users.create.validations.email_required'),
            'email.unique' => __('users.create.validations.email_unique'),
            'email.max' => __('users.create.validations.email_max'),
        ];
    }
}
