<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use app\Models\Doctor;
use Illuminate\Support\Facades\Validator;


class DoctorsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::with('specialization')->get();

        return $this->sendResponse($doctors, '');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        // $validator = Validator::make($input, [
        //     'name' => 'required',
        //     'detail' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return $this->sendError('Validation Error.', $validator->errors());
        // }

        $Doctor = Doctor::create($input);

        return $Doctor . 'created successfully.';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Doctor = Doctor::find($id);

        if (is_null($Doctor)) {
            return 'Doctor not found.';
        }
        return $Doctor;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $Doctor)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $Doctor->name = $input['name'];
        $Doctor->detail = $input['detail'];
        $Doctor->save();

        return $Doctor . ' updated successfully.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $Doctor)
    {
        $Doctor->delete();

        return  'Doctor deleted successfully.';
    }
}
