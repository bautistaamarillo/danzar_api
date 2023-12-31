<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::WHERE('active', 1)->get();;

        // $sql = 'SELECT * FROM items ';

        // $items= DB::select($sql);

        return $items;
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
            "amount"=>'required',
            "category_id"=>'required'
        ]);
        
        if ($validator->fails()) {
            return "Error al ingresar los datos, ha ingresado un campo vacio.";
        }

        $item = Item::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'category_id' => $request->category_id,
            'active' => 1
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::WHERE('ID', $id)->get();
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item= Item::where('id', $id)->get();
        
        return $item;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item= Item::find($id);

        $item->name = $request->name;
        $item->amount = $request->amount;
        $item->category_id = $request->category_id;

        $item->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item= Item::find($id);
        $item->active = 0;

        $item->save();
    }
}
