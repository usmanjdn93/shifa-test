<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PatientsSearchController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return Factory|View
     */
    public function showPage(Request $request)
    {
        if ($request->has('mr_no')) {
            $patient = Patient::with('patientVitals')->find($request->input('mr_no'));
            return response()->json([
                'data' => $patient
            ]);
        } else {
            return response()->json([
                'data' => 'data not found'
            ]);
        }
    }

}
