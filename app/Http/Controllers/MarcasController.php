<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\marcas;
use App\Models\productos;
use Illuminate\Support\Facades\Storage;
use DB;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 public function index()
 {
    $marcas = marcas::orderBy('nombre', 'ASC')->get();
    //return $marcas;
    return view('marcas/index', ['marcas'=>$marcas]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $productos = productos::orderBy('idproducto','ASC')->get();
        return view('marcas/create',['productos'=>$productos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        marcas::create(['nombre' =>request('nombre')]);
        return redirect()->route('marcas.index');
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
        $marca = marca :: findOrFail($id);
        $marca->delete();
        return redirect()->route('marca.index');
    }
}
