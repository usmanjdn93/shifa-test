<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Patient;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('patient.index');
    }

    /**
     * Api to listing the patient data.
     *
     * @return Factory|View
     * @throws \Exception
     */
    public function data()
    {
        return Datatables::of(Patient::query())
            ->addColumn('action', function ($patient) {
                return '<a href="' . route('patients.edit', $patient->mr_no) .'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'
                .' <a href="' . route('patients.show', $patient->mr_no) .'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-show"></i> Show</a>';
            })
            ->setRowId('mr_no')
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('patient.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PatientRequest $request
     * @return RedirectResponse
     */
    public function store(PatientRequest $request)
    {
        $patient = Patient::create([
            'mr_no' => $request->input('mr_no'),
            'sur_name' => $request->input('sur_name'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
        ]);

        $patient->patientVitalAdd($request);

        return redirect()->route('patients.index')->with(['message' => 'Patient added successfully']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function show($id)
    {
        $patient = Patient::with('patientVitals')->findOrFail($id);
        return view('patient.show', compact('patient'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $patient = Patient::with('patientVitals')->findOrFail($id);
        return view('patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PatientRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(PatientRequest $request, $id)
    {
        $this->addPatient($request);

        return redirect()->route('patients.index')->with(['message' => 'Patient added successfully']);

    }

    /**
     * @param PatientRequest $request
     */
    private function addPatient(PatientRequest $request): void
    {
        $patient = Patient::updateOrCreate([
            'mr_no' => $request->input('mr_no'),
        ], [
            'sur_name' => $request->input('sur_name'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'mr_no' => $request->input('mr_no'),
        ]);

        $patient->patientVitalAdd($request);
    }
}
