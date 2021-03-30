<?php

namespace App\Http\Requests\cms;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'title_en' => 'required',
            'subtitle_en' => 'required',
            'button_en' => 'required',
            'image' => 'nullable|image',
        ];
    }
}
