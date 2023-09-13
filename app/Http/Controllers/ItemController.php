<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items= Item::all(); 

        // $sql = 'SELECT * FROM items ';

        // $items= DB::select($sql);

        return $items->toJson();
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
        $request->validate([
            "name"=>'required',
            "amount"=>'required',
            "category_id"=>'required'
        ]);

        $item= Item::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'category_id' => $request->category_id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item= Item::where('id', $id)->get();
        
        return $item->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item= Item::where('id', $id)->get();
        
        return $item->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item= Item::find($id);

        $item-> name = $request->name;
        $item-> amout = $request->amount;

        $item->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item= Item::destroy($id);
    }
}
