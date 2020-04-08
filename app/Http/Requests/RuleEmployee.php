<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleEmployee extends FormRequest
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
          'emp_no' => 'integer',
          'first_name' => 'string|max:255',
          'last_name' => 'string|max:255',
          'birth_date' => 'date|max:255',
          'gender' => 'string|max:255',
          'hire_date' => 'string|max:255'

      ];
    }
}
 