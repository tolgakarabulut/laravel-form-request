<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BookCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() :bool
    {
        return (Auth::check() && Auth::user()->isAdmin());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'writer' => 'required|string|max:100',
            'publisher' => 'required|string|max:100',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'page_number' => 'required|numeric|min:1',
            'edition_year' => 'required|numeric',
            'isbn' => 'required|numeric|unique:blog,isbn',
            'image' => 'required|string|max:255',
            'lang' => 'required|string',
        ];
    }
}
