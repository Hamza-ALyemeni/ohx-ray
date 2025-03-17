<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactRequest extends FormRequest
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
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }
    protected function failedValidation(Validator $validator) {

        $errorString = implode(",",$validator->messages()->all());
        $response_array['success'] = 0;
        $response_array['msg'] = $errorString;
        $response_code = 200;
        throw new HttpResponseException(response()->json($response_array, $response_code));
    }
}
