<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required',
            'employee_number' => 'required|unique:users,employee_number',
            'contract' => 'required',
            'grade' => 'required',
            'position',
            'department',
            'joined_date' => 'required',
            'office' => 'required',
            'linemanager',
            'hradmin',
            'email'  => 'required|email|unique:users,email',
        ];
    }
}
