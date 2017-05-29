<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdminRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name' => 'required|max:255',
                    'email' => 'required|email|unique:users|max:255',
                    'password' => 'required|confirmed|min:6'
                ];
            }
            case 'PUT': {
                return [
                    'password' => 'required|confirmed|min:6'
                ];
            }
            case 'PATCH': {
                return [
                    'name' => 'required|max:255',
                    'email' => 'required|email|unique:admin,email,' . Auth::id()
                ];
            }
            default:
                return [];
        }
    }
}
