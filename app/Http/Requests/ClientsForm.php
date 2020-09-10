<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsForm extends FormRequest
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
            'name' => ['required','min:6'],
            'phone' => ['required'],
            'age' => ['required'],
            'email' => ['required','email'],
        ];

        
    }

    public function messages()
        {
        return [
            'name.required' => 'Ce champ ne doit pas etre vide',
            'name.min' => 'Vous devez saisir un nom au minimun min: caracteres',
            'phone.required' => 'Ce champ ne doit pas etre vide',
            'age.required' => 'Ce champ ne doit pas etre vide',
            'email.required' => 'Vous devez saisir une adresse email',
            'email.email' => 'Vous devez saisir une adresse email valide',
        ];
    }
}
