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
            'code_group' => 'required|string|min:10|max:30|unique:groups,code_group,group_id',
            'anne_formation'=>'required|date',
            'nbr_stagiaires' => 'required|integer|min:1',
            'nom_ilière' => 'required|string|min:10|max:30',

        ];
    }

    public function messages()
    {
        return [
            'code_group.required' => 'Le champ code du groupe est requis.',
            'code_group.string' => 'Le champ code du groupe doit être une chaîne de caractères.',
            'code_group.min' => 'Le champ code du groupe doit contenir au moins :10 caractères.',
            'code_group.max' => 'Le champ code du groupe ne peut pas dépasser :30 caractères.',
            'code_group.unique' => 'Le code du groupe doit être unique.',
            'anne_formation.required' => 'Le champ année de formation est requis.',
            'anne_formation.date' => 'Le champ année de formation doit être une date valide.',
            'nbr_stagiaires.required' => 'Le champ nombre de stagiaires est requis.',
            'nbr_stagiaires.integer' => 'Le champ nombre de stagiaires doit être un entier.',
            'nbr_stagiaires.min' => 'Le champ nombre de stagiaires doit être d\'au moins :1.',
            'nom_ilière.required' => 'Le champ nom de l filière est requis.',
            'nom_ilière.string' => 'Le champ nom de l filière doit être une chaîne de caractères.',
            'nom_ilière.min' => 'Le champ nom de l filière doit contenir au moins :10 caractères.',
            'nom_ilière.max' => 'Le champ nom de l filière ne peut pas dépasser :30 caractères.',
        ];
    }

}
