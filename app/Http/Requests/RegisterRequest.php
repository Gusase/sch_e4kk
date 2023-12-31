<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Oopsie! Don\'t forget to fill in your name!',
            'name.string' => 'Hmm... your name can\'t have numbers or symbols!',
            'name.min' => 'Oh no! Your name must be at least 5 characters long!',
            'name.regex' => 'Wait, does your name even have letters in it?',
            'username.required' => 'Hey there! You need to fill in your username!',
            'username.min' => 'Oops! Your username should be at least 5 characters long!',
            'username.unique' => 'Oh snap! This username is already taken!',
            'email.required' => 'Hold on! You gotta fill in your email!',
            'email.email' => 'Hmm... the email format seems a bit off!',
            'email.unique' => 'Oops! This email is already in use!',
            'password.required' => 'Uh-oh! Don\'t forget to fill in your password!',
            'password.min' => 'Oopsie daisy! Your password should be at least 6 characters long!',
            'password.confirmed' => 'Whoopsie! The password confirmation doesn\'t match!',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|min:5',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ];
    }
}
