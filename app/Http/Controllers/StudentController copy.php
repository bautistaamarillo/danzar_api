<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::All();
        return $student;
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
            'name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'dni' => 'required',
            'phone_number' => 'required',
            'birthdate' => 'required',
            //Valido todo aquello que debe ser ingresado obligatoriamente, "not null"
        ]);
        
        if ($validator->fails()) {
            return "Error al ingresar los datos, ha ingresado un campo vacio.";
        }
        
        $student = new Student();
        $student->name = $request->name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->dni = $request->dni;
        $student->phone_number = $request->phone_number;
        $student->observations = $request->observations;
        $student->birthdate = $request->birthdate;
        $student->active = $request->active;

        $itemstudents = $request->itemstudents;

        
        
        $student->save();
        
        foreach ($itemstudents as $items) {
            $student->items()->attach($student->id, [
                "item_id" => $items["item_id"]
            ]
            );
        }
        



        return ($student);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::WHERE('ID', $id)->get();
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        
        $student = Student::find($id);
        $student->name = $request->name;
        $student->last_name = $request->last_name;
        $student->dni = $request->dni;
        $student->phone_number = $request->phone_number;
        $student->birthdate = $request->birthdate;
        $student->save();
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
           //verificar deuda, posiblemente en el modelo, realizar una funcionj estatica 
           //para que en este caso pongamos Student::nombrefuncion($id) y nos muestre
           //si tiene o no deudas, en caso de que tenga deuda, que impida borrarlo,
           //y si no tiene deudas que sea borrado con exito.

           Student::destroy($id);
           return ("Borrado con exito");
        
    }


    


}
