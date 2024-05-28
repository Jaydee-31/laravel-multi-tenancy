<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:10|max:255',
            'content' => 'required|min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // 'author_id' => [
            //     'required',
            // ],
        ];
    }
}
