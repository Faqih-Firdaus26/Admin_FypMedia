<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule; // Pastikan ini diimpor dengan benar

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return Auth::check();
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Ambil instance admin dari route jika ada
        $adminId = $this->route('admin') ? $this->route('admin')->id : null;

        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('admins')->ignore($adminId), // Abaikan email user yang sedang diedit
            ],
            'password' => 'nullable|string|min:8',
            'role' => 'required|in:ADMIN,USER',
        ];
    }
}
