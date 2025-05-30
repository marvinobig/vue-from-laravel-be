<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'status' => 'boolean'
        ];
    }

    public function messages():array {
        return [
            'title.required' => 'the title is required',
            'title.string' => 'the title should be a word/words',
            'title.max' => 'the title is too long',

            'body.required' => 'the post needs content',
            'body.string' => 'the post needs to have valid content',

            'status.boolean' => 'the post status needs to be valid'
        ];
    }
}
