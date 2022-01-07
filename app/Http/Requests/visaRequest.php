<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class visaRequest extends FormRequest
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
            'fullname' => 'required', 
            'address' => 'required', 
            'email' => 'required | email',
            'phone' => 'required',
            'age' => 'required',
            'visacategory' => 'required',
            'servicerequired' => 'required',
            'destination' => 'required',
            'validvisa' => '',
            'validexpired' => '',
        ];

    }


    public function messages()
    {
    
        return [
        'visacategory.required' => 'Visa category is required!',
        'servicerequired.required' => 'Select the service you required',
        ];
    }
    



}
