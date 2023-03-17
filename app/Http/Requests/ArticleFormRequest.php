<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        $rules = [
            'title' => 'required|max:50',
            'text' => 'required|min:10',
            'category_id' => 'required|exists:categories,id',
        ];
    
        if ($this->route()->getName() == 'articles.store') {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg|max:8192';
        } else {
            $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg|max:8192';
        }
    
        return $rules;
    }
}
