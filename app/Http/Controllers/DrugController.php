<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Drug;

use Illuminate\Http\Request;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drugs = Drug::all();
        return view('dashboard', compact('drugs'));
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
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $image_name);

            $drug = new Drug();
            $drug->name = $request->name;
            $drug->description = $request->description;
            $drug->price = $request->price;
            $drug->quantity = $request->quantity;
            $drug->image = $image_name;
            $drug->category = $request->category;
            $drug->save();
            return redirect()->back()->with('success', 'Drug added successfully');
        } else{
            dd('No image found');     
        }
    }
        

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $drug = Drug::find($id);
        return view('view-drugs', compact('drug'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
