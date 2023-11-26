<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'name' => [
                'required',
                'max:50',
                'unique:categories,name,' . $this->id . ',id'
            ],
            'description' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'description' => 'deskripsi',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama kategori harus diisi',
            'name.unique' => 'Nama kategori yang dimasukkan sudah ada',
            'name.max' => 'Panjang karakter maksimal :max',
            'description.required' => 'Deskripsi harus diisi'
        ];
    }
}
