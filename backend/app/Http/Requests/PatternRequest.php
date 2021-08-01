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
            'pattern.*' => 'required|string|in:all,one,two,three',
        ];
    }

    public function messages()
    {
        return [
            'pattern.*.required' => 'パターンはカンマの前後は必須です',
            'pattern.*.string'  => 'パターンは文字列のみです',
            'pattern.*.in'  => 'パターンはall,one,two,threeのみです',
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->pattern) {
            $this->merge([
                'pattern' => explode(',', $this->pattern)
            ]);
        }
    }

    protected function failedValidation(Validator $validator)
    {
        $response['pattern'] = implode(',', $this->pattern);
        $response['login_id'] = $this->request->all()['login_id'] ?? null;
        $response['ga_id'] = $this->request->all()['ga_id'] ?? null;;
        $response['test_product_list'] = [];
        $response['test2_product_list'] = [];
        $response['test3_product_list'] = [];
        $response['error_list'] = $validator->errors()->first();
        throw new HttpResponseException(response()->json($response,400));
    }
}
