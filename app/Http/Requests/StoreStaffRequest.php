<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
        return  [
            'admin_id'  => 'required',
            'staff_id' => 'required|min:3|unique:staffs,staff_id', 
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|email|unique:staffs,email',
            'phone' => 'required|unique:staffs,phone|regex:/^([0-9\s\-\+\(\)]*)$/','min:10',
            'dob' => 'required|date',
            'gender' => 'required',
            'role' => 'required',
            'section' => 'required',
  
        ];

  
    }

    public function messages()
    {
        return [
            'firstname.required' => 'Firstname Required',
            'lastname.required' => 'Lastname is Required!',
            'email.required' => 'Email is Required!',
            'phone.required' => 'Phone  is Required!',
            'section.required' => 'Section is Required!',
            'role.required' => 'Role is Required!',
        ];
    
    }
}
