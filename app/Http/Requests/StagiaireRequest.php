<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StagiaireRequest extends FormRequest
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
            'password' => 'required|string|max:8',
            'nom'=>'required|string|max:50',
            'prenom'=>'required|string|max:50',
            'email_etu'=>'required|email',
            'stagaire_en_formation'=>'required|in:oui,non',
            'nationalite'=>'required|string|max:20',
            'date_pv' => 'nullable|date',
            'code_group'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Le numéro d\'enregistrement est requis.',
            // 'password.integer' => 'Le numéro d\'enregistrement doit être un entier.',
            'password.unique' => 'Le numéro d\'enregistrement est déjà utilisé.',
            'nom.required' => 'Le nom est requis.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser :50 caractères.',
            'prenom.required' => 'Le prénom est requis.',
            'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
            'prenom.max' => 'Le prénom ne peut pas dépasser :50 caractères.',
            'email_etu.required' => 'L\'adresse email est requise.',
            'email_etu.email' => 'L\'adresse email doit être une adresse email valide.',
            'stagaire_en_formation.required' => 'Le statut de stagiaire en formation est requis.',
            'stagaire_en_formation.in' => 'Le statut de stagiaire en formation doit être oui ou non.',
            'nationalite.required' => 'La nationalité est requise.',
            'nationalite.string' => 'La nationalité doit être une chaîne de caractères.',
            'nationalite.max' => 'La nationalité ne peut pas dépasser :20 caractères.',
            'date_pv.date' => 'La date de PV doit être une date valide.',
            'group_id.required' => 'Le groupe est requis.',
        ];
    }

}
