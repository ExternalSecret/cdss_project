<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patient_records.index', compact('patients'));
    }

    public function create()
    {
        return view('patient_records.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'diagnosis' => 'required',
            'treatment' => 'required',
            'admission_date' => 'required',
            'discharge_date' => 'required',
            'doctor' => 'required',
        ]);

        Patient::create($request->all());

        return redirect()->route('patients.index')
                         ->with('success', 'Patient record created successfully.');
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        return view('patient_records.show', compact('patient'));
    }

    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patient_records.show', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'patient_id' => 'required|unique:patients,patient_id,'.$id,
            'name' => 'required',
            'age' => 'required|integer',
            'gender' => 'required',
            'diagnosis' => 'required',
            'treatment' => 'required',
            'admission_date' => 'required|date',
            'discharge_date' => 'required|date',
            'doctor' => 'required',
        ]);

        $patient = Patient::find($id);
        $patient->update($request->all());

        return redirect()->route('patients.index')
                         ->with('success', 'Patient record updated successfully.');
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        return redirect()->route('patients.index')
                         ->with('success', 'Patient record deleted successfully.');
    }
}