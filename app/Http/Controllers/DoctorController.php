<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Specialization;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::paginate(7);
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specializations = Specialization::all();
        return view('doctors.create', compact('specializations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $doctor = new Doctor();

        $doctor->name = $request->name;
        $doctor->phone_number = $request->phone_number;
        $doctor->specialization_id = $request->specialization;
        $doctor->clinic_address = $request->clinic_address;
        $doctor->certificate = $request->certificate;
        $doctor->avatar = $request->avatar;


        $doctor->save();

        return redirect()->route('doctor.index')->with('success', 'Doctor Saved Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $specializations  = Specialization::all();
        return view('doctors.edit', compact('doctor', 'specializations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone_number = $request->phone_number;
        $doctor->specialization_id = $request->specialization;
        $doctor->clinic_address = $request->clinic_address;
        $doctor->certificate = $request->certificate;
        $doctor->avatar = $request->avatar;

        $doctor->update();

        return redirect()->route('doctor.index')->with('success', 'Doctor Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::destroy($doctor->id);
        return redirect()->route('doctor.index')->with('success', 'Doctor Deleted Successfuly');
    }
}
