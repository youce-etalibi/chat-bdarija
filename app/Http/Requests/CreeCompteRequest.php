<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreeCompteRequest extends FormRequest
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
            'nom' => 'required|min:2|max:50',
            'prenom' => 'required|min:2|max:50',
            'nom_utilisateur' => 'required|min:2|max:50|unique:comptes',
            'email' => 'required|min:2|max:200|email|unique:comptes',
            'date_naissance' => 'required',
            'localisation' => 'required',
            'mot_de_pass' => 'required|min:5|max:200',
            'mot-de-pass-confirme' => 'required|same:mot_de_pass',
        ];
    }
}
