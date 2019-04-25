<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Vehicle as Validator;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return Vehicle::paginate($request->get("perPage"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Validator $request
     * @return \Illuminate\Http\Response
     */
    public function store(Validator $request)
    {
        $data = $request->validated();
        $vehicle = Vehicle::create($data);
        return response()->json(["data" => $vehicle], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return response()->json(["data" => $vehicle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Validator $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Validator $request, Vehicle $vehicle)
    {
        $vehicle->fill($request->validated())->save();
        return response()->json(["data" => $vehicle]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Vehicle $vehicle)
    {
        return response()->json(["data" => $vehicle->delete()], Response::HTTP_NO_CONTENT);
    }
}
