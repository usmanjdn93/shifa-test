<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientVital extends Model
{
    public $table = 'sih_mis_patient_vitals';

    public $guarded = [];

    public  function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}
