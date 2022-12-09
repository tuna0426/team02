<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCampRequest extends FormRequest
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
            'name'=>'required|string|min:2|max:191',
            'r_or_b'=>'required',
            'country'=>'required',
        ];
    }
    public function messages()
    {
        return [
            "name.required"=>"陣營名稱 為必填"
        ];
    }
}
