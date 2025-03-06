<?php

namespace App\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'subject_code' => 'required|unique:subjects,subject_code,' . $this->subject->id,
            'name' => 'required|unique:subjects,name,' . $this->subject->id,
            'description' => 'nullable',
            'units' => 'required|integer',
            'schedule' => 'nullable'
        ];
    }

    public function messages(): array
    {
        return [
            'subject_code.required' => 'Subject code is required',
            'subject_code.unique' => 'This subject code already exists',
            'name.required' => 'Subject name is required',
            'name.unique' => 'This subject name already exists',
            'units.required' => 'Number of units is required',
            'units.integer' => 'Units must be a whole number'
        ];
    }
}