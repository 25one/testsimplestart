<?php

namespace App\Http\Requests;

class GrantRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $rules = [
            'name' => 'bail|required|max:255',
            'email' => 'bail|required|email|max:255',
            'message' => 'bail|required',            
        ];
    }
}
