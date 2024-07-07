<?php

namespace App\Http\Controllers;

use App\Models\Medications;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatientController extends Controller
{


    /**
     * Fliter a listing of the resource .
     *
     * @return \Illuminate\Http\Response
     */

    public function filter(Request $request)
    {
        //
        $query = $request->searchText;

        $patients = Patient::where('name', 'like', '%' . $query . '%')->get();


//        return collection to show in Blade
        return response()->json($patients);  // Example: return as JSON response
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Patient::all();

        return view('patients.index', ['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $patient = new Patient();

        return view('patients.create', ['patient' => $patient]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_information' => [
                'required',
                'string',
                'max:15',
                'regex:/^\+?[0-9]{10,15}$/',
            ],
            'date_of_birth' => 'required',
            'gender' => 'required|string',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'medical_histories' => 'nullable|string',
        ]);


        $data['date_of_birth'] = Carbon::createFromFormat('d, M Y', $data['date_of_birth'])->format('Y-m-d');

        $patient = Patient::create($data);
        foreach ($request->medication_name as $medication) {
            if ($medication) {
                $medicine = new Medications();
                $medicine->name = $medication;
                $medicine->patient_id = $patient->id;
                $medicine->save();
            }
        }
        return redirect()->back()->with('Create', 'New Patient Created');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //

        return view('patients.show', ['patient' => $patient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //

        return view('patients.edit', ['patient' => $patient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //


        $data = $request->all();

        $request->validate([
            'name' => 'required|string|max:255',
            'contact_information' => [
                'required',
                'string',
                'max:15',
                'regex:/^\+?[0-9]{10,15}$/',
            ],
            'date_of_birth' => 'required',
            'gender' => 'required|string',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'medical_histories' => 'nullable|string',
        ]);


        $data['date_of_birth'] = Carbon::createFromFormat('d, M Y', $data['date_of_birth'])->format('Y-m-d');

        $patient->update($data);

        $patient->medications()->delete();

        foreach ($request->medication_name as $medication) {
            if ($medication) {
                $medicine = new Medications();
                $medicine->name = $medication;
                $medicine->patient_id = $patient->id;
                $medicine->save();
            }
        }


        return redirect()->to(route('patients.index'))->with('Update', $patient->code . ' Record Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return 1;
        //
    }


}
