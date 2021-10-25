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
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|min:5',
            'email' => 'required|email',
            'age' => 'required|integer',
            'roll_no' => 'required|max:20',
            'address' => 'required|min:20|max:255',
            'batch_id' => 'required|exists:batches,id'
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
