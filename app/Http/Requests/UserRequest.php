<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
                    'username' => 'required|unique:users|max:255',
                    'email' => 'required|unique:users|max:255',
                    'password' => 'required|confirmed|min:6',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'gender' => 'required|in:male,female',
                    'role' => 'required',
                    'date_of_birth' => 'required|date',
                    //'phone_no' => 'required|numeric',
                    'status' => 'required|in:active,inactive',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required|max:255',
                    'username' => 'required|max:255|unique:users,username,'. Request::get('id'),
                    'email' => 'required|unique:users,email,' . Request::get('id'),
                    'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'gender' => 'required|in:male,female',
                    //'role' => 'required',
                    'date_of_birth' => 'required|date',
                    //'phone_no' => 'required|numeric',
                    //'status' => 'required|in:active,inactive',
                ];
            }
            default:
                break;
        }
    }
}
