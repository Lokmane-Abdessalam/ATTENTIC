<?php

namespace App\Http\Requests;

use App\Models\Student;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StudentFrom extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->request->get("id");
        return [
            'card_number' => ['required', 'unique:students,card_number,'.$id, 'numeric'],
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'unique:students,email,'.$id],
            'group_id' => ['required', 'exists:groups,id'],
            'password' => [Rule::requiredIf(!$id),'min:6'],
        ];
    }
}
