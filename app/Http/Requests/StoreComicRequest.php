<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
        return [
            'title' => 'required|unique:products,title|min:5|max:100',
            'thumb' => 'nullable|max:255',
            'type' => 'nullable|max:20',
            'description' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo é obbligatorio',
            'title.min' => 'Il titolo deve essere almeno :min caratteri',
            'title.max' => 'Il titolo deve essere almeno :max caratteri',
            'thumb.max' => "L'immagine puó essere massimo :max caratteri",
            'type.max' => 'Il tipo di prodotto puó essere massimo :max caratteri'
        ];
    }
}
