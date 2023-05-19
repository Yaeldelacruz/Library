<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:100',
            'url' => 'required|image|max:2048',
            'count' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Escribe un nombre',
            'url.required' => 'Ingresa una imagen de libro',
            'count.required' => 'Ingresa la cantidad de libros disponibles',
        ];
    }
}
