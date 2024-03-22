<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
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
            'code_group' => 'required|string|min:10|max:30|unique:table,code_group,group_id',
            'anne_formation'=>'required|date',
            'nbr_stagiaires' => 'required|integer|min:1',
            'nom_ilière' => 'required|string|min:10|max:30',

        ];
    }
}
