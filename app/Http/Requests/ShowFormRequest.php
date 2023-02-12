<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => [
              'required',
              'min:5'
            ],
            'small_text' => [
                'required'
            ],
            'long_text' => [
                'required'
            ],
            'banner' => [
                'nullable'
            ],
            'price' => [
                'required'
            ],
            'people' => [
                'required'
            ]
        ];
        return $rules;
    }
}
