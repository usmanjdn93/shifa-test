<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Patient extends Model
{
    public $table = 'sih_mis_patients';

    public $primaryKey = 'mr_no';

    public $incrementing = false;

    public $guarded = [];

    public function PatientVitals()
    {
        return $this->hasMany(PatientVital::class, 'mr_no', 'mr_no');
    }
    public function patientVitalAdd(Request $request)
    {
        $patientVital = PatientVital::updateOrCreate([
            'mr_no' => $this->mr_no,
            'vital_date' => $request->input('vital_date'),
            'vital_value' => $request->input('vital_value'),
            'vital_type' => $request->input('vital_type'),
            'vital_unit' => $request->input('vital_unit'),
        ]);
    }
}
