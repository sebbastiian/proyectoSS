<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tipos;
use App\Models\productos;
use Illuminate\Support\Facades\Storage;
use DB;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tipos = tipos::orderBy('nombre', 'ASC')->get();
        //return $tipos;
        return view('tipos/index', ['tipos'=>$tipos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $productos = productos::orderBy('idproducto','ASC')->get();
        return view('tipos/create',['productos'=>$productos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        tipos::create(['nombre' =>request('nombre'),'idproducto'=>request('idproducto')]);
        return redirect()->route('tipos.index');
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
        $tipos = tipos :: findOrFail($id);
        $tipos->delete();
        return redirect()->route('tipos.index');
    }
}
