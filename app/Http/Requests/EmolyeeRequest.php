<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class EmolyeeRequest extends FormRequest
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
            'f_name'=>'required',
            'l_name'=>'required',
            'logo' => request()->route('employee')
                ? 'nullable' :'required',
            'country_id' => 'required|exists:countries,id',
            'location'=>'required',
            'address'=>'required',
            'email' => request()->route('employee')
                ? 'required|email|max:255|unique:users,email,' . request()->route('employee')->id
                : 'required|email|max:255|unique:users,email',
            'phone' => request()->route('employee')
                ? 'required|max:255|unique:users,phone,' . request()->route('employee')->id
                : 'required|max:255|unique:users,phone',
            'password' => request()->route('employee') ? 'nullable' : 'required|max:50|confirmed',
            'gender' => 'required|in:1,2',
            'date_of_birth' => 'required|date',
            'company_id' => 'required|exists:companies,id',
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
