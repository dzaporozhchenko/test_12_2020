<?php

namespace App\Http\Requests\Click\BadDomain;

use Illuminate\Foundation\Http\FormRequest;

class StoreBadDomainRequest extends FormRequest
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
            'name'  => 'sometimes|required|unique:App\Click\Models\BadDomain'
        ];
    }
}