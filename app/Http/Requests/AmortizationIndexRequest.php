<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmortizationIndexRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'per_page' => 'integer|min:1',
            'sort_column' => 'string|in:id,name',
            'sort_direction' => 'string|in:asc,desc',
        ];
    }
}
