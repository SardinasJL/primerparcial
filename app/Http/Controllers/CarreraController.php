<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras = Carrera::all();
        return view("carrera_index", ["carreras" => $carreras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("carrera_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Carrera::create($request->all());
        return redirect()->route("carreras.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carrera = Carrera::find($id);
        return view("carrera_edit", ["carrera" => $carrera]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carrera = Carrera::find($id);
        $carrera->update($request->all());
        return redirect()->route("carreras.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carrera = Carrera::find($id);
        $carrera->delete();
        return redirect()->route("carreras.index");
    }
}
