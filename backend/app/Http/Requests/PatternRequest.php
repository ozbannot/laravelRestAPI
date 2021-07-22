<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Http\Traits\ConvertResponse;

class PatternRequest extends FormRequest
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
            'pattern' => 'required|integer|digits:1',
        ];
    }

    public function messages()
    {
        return [
            'pattern.required' => 'パターンは必須です',
            'pattern.integer'  => 'パターンは数値のみです',
            'pattern.digits'   => 'パターンは1桁の数値のみです'
        ];
    }

     public function validationData()
    {
        return array_merge($this->request->all(), [
            'pattern' => $this->pattern,
        ]);
    }

    protected function failedValidation(Validator $validator) // TODO traitと合わせてリファクタ
    {
        $response['pattern'] = $this->pattern;
        $response['login_id'] = $this->request->all()['login_id'] ?? null;
        $response['ga_id'] = $this->request->all()['ga_id'] ?? null;;
        $response['test_product_list'] = [];
        $response['test2_product_list'] = [];
        //dd($validator->errors());
        $response['error_list'] = $validator->errors()->all();
        throw new HttpResponseException(response()->json($response,400));
    }
}
