<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutor = Tutor::all();
        return $tutor->toJson();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            "name"=>'required',
            "last_name"=>'required',
            "email"=>'required',
            "phone_number"=>'required',
            "dni"=>'required'
        ]);
        
        if ($validator->fails()) {
            return "Error al ingresar los datos, ha ingresado un campo vacio.";
        }

        $tutor = Tutor::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'dni' => $request->dni,
        ]);
        
        return ($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tutor = Tutor::WHERE('ID', $id)->get();
        return $tutor;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tutor = Tutor::where('id', $id)->get();
        return $tutor->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tutor = Tutor::find($id);
        $tutor->name = $request->name;
        $tutor->last_name = $request->last_name;
        $tutor->email = $request->email;
        $tutor->phone_number = $request->phone_number;
        $tutor->dni = $request->dni;
        $tutor->save();
        return $tutor;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tutor::destroy($id);
        return ("Ha sido borrado");
    }
}
