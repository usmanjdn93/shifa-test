<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'mr_no' => 'required|max:20|unique:sih_mis_patients,mr_no',
                    'sur_name' => 'required|max:30',
                    'first_name' => 'required|max:20',
                    'middle_name' => 'required|max:20',
                    'last_name' => 'required|max:20',
                    'gender' => 'required',
                    'dob' => 'required|date',
                    'vital_date' => 'required|date',
                    'vital_value' => 'required|max:100',
                    'vital_type' => 'required|max:100',
                    'vital_unit' => 'required|max:100',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                  'sur_name' => 'required|max:30',
                    'first_name' => 'required|max:20',
                    'middle_name' => 'required|max:20',
                    'last_name' => 'required|max:20',
                    'gender' => 'required',
                    'dob' => 'required|date',
                    'vital_date' => 'required|date',
                    'vital_value' => 'required|max:100',
                    'vital_type' => 'required|max:100',
                    'vital_unit' => 'required|max:100',
                ];
            }
            default:break;
        }

    }
}
