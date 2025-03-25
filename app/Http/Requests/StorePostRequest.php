<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kategori_kode' => 'required',
            'kategori_nama' => 'required',
        ];
    }

    public function store(StorePostRequest $request):
    RedirectResponse
    {
        $validated = $request->validated();

        $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validated = $request->safe()->except(['kategori_koe', 'kategori_nama']);

        return redirect('/kategori');
    }

    public function tambah_simpan(StoreUserRequest $request):
    RedirectResponse
    {
        $validated = $request->validated();

        $user = UserModel::create([
            'username' => $validated['username'],
            'nama' => $validated['nama'],
            'password' => Hash::make($validated['password']),
            'level_id' => $validated['level_id']
        ]);

        return redirect('/user');
    }
}
