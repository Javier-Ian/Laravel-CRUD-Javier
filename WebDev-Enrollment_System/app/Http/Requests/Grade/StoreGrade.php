<?php

namespace App\Http\Requests\Grade;

use Illuminate\Foundation\Http\FormRequest;

class StoreGrade extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'midterm' => 'required|in:1.00,1.25,1.50,1.75,2.00,2.25,2.50,2.75,3.00,4.00,5.00,INC,drp',
            'finals' => 'required|in:1.00,1.25,1.50,1.75,2.00,2.25,2.50,2.75,3.00,4.00,5.00,INC,drp'
        ];
    }

    public function messages(): array
    {
        return [
            'student_id.required' => 'Student ID is required',
            'student_id.exists' => 'Selected student does not exist',
            'subject_id.required' => 'Subject ID is required',
            'subject_id.exists' => 'Selected subject does not exist',
            'midterm.required' => 'Midterm grade is required',
            'midterm.in' => 'Invalid midterm grade value',
            'finals.required' => 'Final grade is required',
            'finals.in' => 'Invalid final grade value',
        ];
    }
}