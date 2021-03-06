<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPatientRequest extends FormRequest
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
            'age' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'problem' => 'required',
            'image' => 'max:4000|mimes:jpg,png,jpeg'
        ];
    }
}
