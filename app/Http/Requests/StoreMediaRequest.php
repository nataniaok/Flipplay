<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMediaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id  = $this->route('media')?->id;
        $req = $this->isMethod('PATCH') ? 'sometimes' : 'required';

        return [
            'title'      => [$req, 'string', 'max:255', 'unique:media,title,' . $id],
            'category'   => [$req, 'in:Anime,Drama,Manga,Novel'],
            'genres'     => [$req, 'array', 'min:1'],
            'genres.*'   => ['string', 'max:50'],
            'rating'     => ['nullable', 'numeric', 'between:0,10'],
            'synopsis'   => ['nullable', 'string'],
            'unit_count' => ['nullable', 'integer', 'min:1'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul media wajib diisi',
            'title.unique'   => 'Judul media sudah ada',
            'rating.between' => 'Rating harus di antara 0 - 10',
        ];
    }
}
