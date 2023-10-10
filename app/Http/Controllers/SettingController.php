<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::All();
        return $setting->toJson();
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
            "name"=>'required'
        ]);
        
        if ($validator->fails()) {
            return "Error al ingresar los datos, ha ingresado un campo vacio.";
        }

        $tutor = Setting::create([
            'name' => $request->name,
        ]);
        
        return ($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tutor = Setting::WHERE('ID', $id)->get();
        return $tutor;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tutor = Setting::where('id', $id)->get();
        return $tutor->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting = Setting::find($id);
        $setting->name = $request->name;
        $setting->save();
        return $setting;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Setting::destroy($id);
        return ("Ha sido borrado");
    }
}
