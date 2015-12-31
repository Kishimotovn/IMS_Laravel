<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCompanyRequest extends Request
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
            'name' => 'required|min:3',
            'website' => 'required',
            'briefIntro' => 'required',
            'internPos' => 'required',
            'numberOfStudentNeeded' => 'required|alpha_num',
            'address' => 'required',
            'email' => 'required|email',
            'representative' => 'required'
        ];
    }
}
