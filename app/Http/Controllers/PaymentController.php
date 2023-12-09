<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment = Payment::all();

        return $payment;
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
            'student_id' => 'required',
            'date' => 'required',
            'number' => 'required',
            
            //Valido todo aquello que debe ser ingresado obligatoriamente, "not null"
        ]);
        
        if ($validator->fails()) {
            return "Error al ingresar los datos, ha ingresado un campo vacio.";
        }

        $payment = new Payment();
        $payment->student_id = $request->student_id;
        $payment->date = $request->date;
        $payment->number = $request->number;
        $payment->active = 1;
        
        $payment->save();
       
        return ($payment);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::WHERE('ID', $id)->get(); //Busco datos especificos con un id
        return $payment;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payment= Payment::where('id', $id)->get();

        return $payment->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment = Payment::find($id);
        $payment->student_id = $request->student_id;
        $payment->date = $request->date;
        $payment->number = $request->number;
        $payment->save(); //Le cambio los datos dependiendo el parametro ingresado.
 
        return $payment;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::destroy($id);
        return ("Ha sido borrado");
    }
}
