<?php

namespace App\Http\Requests\Category;

use App\Traits\HasFilterRequest;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    use HasFilterRequest {
        validated as traitValidated;
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => 'nullable|in:main,sub',
        ];
    }
}
