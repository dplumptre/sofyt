<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class schoolRequest extends FormRequest
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
            'phone' => 'required',
            'age' => 'required',
            'email' => 'required | email',
            'program' => 'required',
            'goal' => 'required',
            'factor' => 'required',
            'financing' => 'required',
            'countries' => 'required',
            'first' => 'required',
            'gender' => 'required',
            'grade' => 'required',
            'motherlevel' => 'required',
            'fatherlevel' => 'required',
            'college' => 'required',
            'countries' => 'required',
            'career' => 'required',
            'knowledge' => 'required',
            'pursuecareer' => 'required',
            'takeadvantage' => 'required',
        ];
    }




    public function messages()
    {
    
        return [
        'goal.required' => 'current educational goal required!',
        'factor.required' => 'important factor in making your college choice required',
        'financing.required' => 'Financing your college education required',
        'countries.required' => 'What other countries have you considered',
        'first.required' => 'Are you the first in your family to attend college',
        'motherlevel.required' => 'highest level of school your mother completed',
        'fatherlevel.required' => 'highest level of school your father completed',
        'college.required' => 'Do you intend to go to college',
        'career.required' => 'Do you feel that you received enough information about Career exploration at school',
        'knowledge.required' => 'Do you feel that you received opportunities feild required',
        'pursuecareer.required' => 'how prepared do you think you will be to pursue your career',
        'takeadvantage.required' => 'How much do you take advantage or the programs',
        ];
    }







}
