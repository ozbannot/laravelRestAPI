<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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
            'pattern' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'pattern.required' => 'パターンは必須です',
            'pattern.integer'  => 'パターンは整数のみです',
        ];
    }

     public function validationData()
    {
        return array_merge($this->request->all(), [
            'pattern' => $this->route('pattern'),
        ]);
    }

    protected function failedValidation(Validator $validator) // TODO traitと合わせてリファクタ
    {
        $response['pattern'] = $this->route('pattern');
        $response['login_id'] = $this->loginId;
        $response['ga_id'] = $this->gaId;
        $response['product_id_list'] = [];
        $response['error_list'] = $validator->errors()->toArray();
        throw new HttpResponseException(response()->json($response,400));
    }
}
