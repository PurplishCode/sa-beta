<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;

class SessionRequest extends FormRequest
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
            "username" => "string|required|max:30",
            "namaLengkap" => "string|required|254",
            "email" => "string|required|max:254",
            "password" => "string|required|max:15",
            "alamat" => "string|required"
        ];
    }

    public function failedAuthorization(): RedirectResponse
    {
        return redirect()->back();
    }
}
