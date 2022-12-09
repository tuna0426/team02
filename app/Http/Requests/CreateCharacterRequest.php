<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCharacterRequest extends FormRequest
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
            'cid'=>'required',
            'rank'=>'required', 
            'type'=>'required', 
            'get'=>'required', 
            'rarity'=>'required', 
            'build_at'=>'required|numeric', 
            'year'=>'required|numeric|min:0|max:1000', 
            'displacement'=>'required|numeric|min:1|max:88650',   
        ];
    }
    public function messages()
    {
        return[
            "name.required"=>"艦船名稱 為必填",
            "build_at.required"=>"建造時間 為HHMMSS",
            "rank.required"=>"艦船級別 A~Z隨機一個字母",
            "year.required"=>"艦船年資 需介於0~1000",
            "displacement.required"=>"艦船排水量 需介於1~88650",
        ];
    }
}
