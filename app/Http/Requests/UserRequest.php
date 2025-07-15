<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class UserRequest extends FormRequest
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
            'nome'=> 'required',
            'email'=> 'required|email',
            'senha'=> 'required|min:6',
        ];
    }
public function messages():array { 
    
    return [
            'nome.required'=> 'Campo nome é obrigatório',
            'email.required'=> 'Campo e-mail é obrigatório',
            'email.email'=> 'Necessário enviar e-mail válido',
            'senha.required' => 'Campo senha é obrigatório',
            'senha.min' => 'Senha com no mínimo :min caracteres!',
        ];
}

}
