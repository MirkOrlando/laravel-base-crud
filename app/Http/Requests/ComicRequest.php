<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'nullable',
            'thumb' => 'nullable|active_url',
            'price' => 'nullable|numeric',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|date',
            'type' => 'nullable'
        ];
    }
}
