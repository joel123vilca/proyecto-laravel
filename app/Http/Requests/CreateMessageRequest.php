<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
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
        return [
            'message' => ['required','max:20']
        ];
    }
    public function messages(){
        return ['message.required'=>'por favor escribe tu message',
        'message.max'=>'el mensaje no supera 20 caracteres'
    ];
    }
}
