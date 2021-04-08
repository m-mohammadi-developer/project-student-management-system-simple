<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
            'cne' => 'required',
            'firstName' => 'required|max:255',
            'secondName' => 'required|max:255',
            'age' => 'integer|required|between:7,100',
            'speciality' => 'required|max:255',
        ];
    }
}
