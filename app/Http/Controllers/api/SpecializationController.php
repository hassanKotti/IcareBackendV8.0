<?php

namespace App\Http\Controllers\api;

use App\Models\Specialization;
use Illuminate\Http\Request;
use  App\Http\Controllers\Api\BaseController as BaseController;

class SpecializationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specializations = Specialization::all();
        return $this->sendResponse($specializations, '');
    }

    public function doctors(Specialization $specialization)
    {
        return $this->sendResponse($specialization->doctors, '');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Specialization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specialization = Specialization::create($request->all());
        return  redirect()->route('specialization.index')->with('success', 'Specialization Saved Successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function show(Specialization $specialization)
    {
        return view('Specialization.show', compact('specialization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialization $specialization)
    {
        return view('Specialization.edit', compact('specialization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $specialization = Specialization::find($id);
        $specialization->name = $request->name;
        $specialization->save();
        return  redirect()->route('specialization.index')->with('success', 'Specialization Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Specialization::destroy($id);
        return  redirect()->route('specialization.index')->with('success', 'Specialization Deleted Successfuly!');
    }
}
