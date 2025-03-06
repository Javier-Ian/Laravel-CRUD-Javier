<?php

namespace App\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubject extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'subject_code' => 'required|unique:subjects,subject_code',
            'name' => 'required|unique:subjects,name',
            'description' => 'nullable',
            'units' => 'required|integer|min:1',
            'schedule' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'subject_code.required' => 'Subject code is required',
            'subject_code.unique' => 'Subject code already exists',
            'name.required' => 'Subject name is required',
            'name.unique' => 'This subject name already exists',
            'units.required' => 'Units is required',
            'units.integer' => 'Units must be a number',
            'units.min' => 'Units must be at least 1'
        ];
    }
}