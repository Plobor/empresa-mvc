<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'pvp' => 'required|numeric|min:0',
            'tipo' => 'nullable|string|max:30',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del producto es obligatorio.',
            'nombre.max' => 'El nombre del producto no debe exceder los 255 caracteres.',
            'pvp.required' => 'El precio del producto es obligatorio.',
            'pvp.numeric' => 'El precio debe ser un número.',
            'pvp.min' => 'El precio no puede ser negativo.',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            // Personaliza más mensajes según sea necesario.
        ];
    }

}
