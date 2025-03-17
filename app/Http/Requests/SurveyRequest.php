<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SurveyRequest extends FormRequest
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
            'title'=>'required',
            'status'=>'required|in:0,1',
//            'company_id' => 'required|exists:companies,id',
            'questions' => 'required|array',
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
