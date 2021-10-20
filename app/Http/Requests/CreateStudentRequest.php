<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha|min:5|max:60',
            'email' => 'required|email',
            'age' => 'required|integer',
            'roll_no' => 'required|max:20',
            'address' => 'required|min:20|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field cannot be empty.',
            'name.alpha' => 'Name should contain only letters.',
        ];
    }
}
