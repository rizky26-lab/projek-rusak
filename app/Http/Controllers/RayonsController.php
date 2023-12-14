<?php

namespace App\Http\Controllers;

use App\Models\rayons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RayonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rayons = Rayons::all();
        return view('rayon.index', compact('rayons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rayons = Rayons::all();
        return view('rayon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rayon' => 'required|min:3',
        // minimal 3
            'user_id' => 'required',
        ]); 
        // create membuat data didalam kurung
        Rayons::create([
            "rayon" => $request->rombel,
            "user_id" => $request->user_id,
        ]);

        return redirect()->back()->with('success', 'data berhasil ditambahkan!');
    }
    
    
    public function show(rayons $rayons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rayons $rayons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rayons $rayons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rayons $rayons)
    {
        //
    }
}