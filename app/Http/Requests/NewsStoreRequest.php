<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'   => 'required|string|max:100',
            'content' => 'required|string',
            'cover'   => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required'   => 'Title is required!',
            'title.max'        => 'Title must be less than 100 characters!',
            'content.required' => 'Content is required!',
            'cover.required'   => 'Cover is required!',
            'cover.image'      => 'Cover must be image!',
            'cover.mimes'      => 'Cover must be jpeg, png, jpg!',
            'cover.max'        => 'Cover must be less than 2 MB!',
        ];
    }
}
