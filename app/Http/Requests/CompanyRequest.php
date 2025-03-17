<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CompanyRequest extends FormRequest
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
            'name'=>'required',
            // 'logo' => request()->route('company')
            //     ? 'nullable' :'required',
            'country_id' => 'required|exists:countries,id',
            // 'location'=>'required',
            // 'address'=>'required',
            'email' => request()->route('company')
                ? 'required|email|max:255|unique:users,email,' . request()->route('company')->user_id
                : 'required|email|max:255|unique:users,email',
            'phone' => request()->route('company')
                ? 'required|max:255|unique:users,phone,' . request()->route('company')->user_id
                : 'required|max:255|unique:users,phone',
            'password' => request()->route('company') ? 'nullable' : 'required|max:50|confirmed',
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
