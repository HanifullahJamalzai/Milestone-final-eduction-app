<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainerStoreRequest extends FormRequest
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
            'name' => 'required|min:4|max:255',
            'category' => 'required|min:3|max:255',
            'bio' => 'required|min:3',
            'fb_link' => 'required|min:3|max:255',
            'instagram_link' => 'required|min:3|max:255',
            'linkedin_link' => 'required|min:3|max:255',
            'photo' => 'required',
        ];
    }
}
