<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\marcas;
use App\Models\tipos;
use Illuminate\Support\Facades\Storage;
use DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $productos = DB::table('productos')
        ->join('tipos', 'productos.idtipo', '=', 'tipos.idtipo')
        ->join('marcas', 'productos.idmarca', '=', 'marcas.idmarca')
        ->select('productos.idproducto','productos.descripcion','productos.cantidad','productos.contneto','productos.unidadxempaque','productos.disponibilidad','productos.valor','productos.imagen','tipos.idtipo','tipos.nombre','marcas.idmarca','marcas.nombre')
        ->orderby('productos.descripcion','ASC')->get();

        //$productos = productos::orderBy('descripcion', 'ASC')->get();
        //return $productos;
        return view('productos/index', ['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tipos = tipos::orderBy('idtipo','ASC')->get();
        $marcas = marcas::orderBy('idmarca','ASC')->get();
        return view('productos/create',['tipos'=>$tipos,'marcas'=>$marcas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        
        //productos::create(['descripcion' =>request('descripcion'),'idproducto'=>request('idproducto'),'idtipo'=>request('idtipo'),'idmarca'=>request('idmarca'),'cantidad'=>request('cantidad'),'contneto'=>request('contneto'),'unidadxempaque'=>request('unidadxempaque'),'disponibilidad'=>request('disponibilidad'),'valor'=>request('valor')]);

        //
        $productos = new productos();
        $productos->idtipo = $request->input('idtipo');
        $productos->idmarca = $request->input('idmarca');
        $productos->idproducto= $request->input('idproducto');
        $productos->descripcion = $request->input('descripcion');
        $productos->cantidad = $request->input('cantidad');
        $productos->contneto = $request->input('contneto');
        $productos->unidadxempaque = $request->input('unidadxempaque');
        $productos->disponibilidad = $request->input('disponibilidad');
        $productos->valor = $request->input('valor');

        if ($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
            $rutaImagen = $imagen->store('public/imagenes');
            $productos->imagen = basename($rutaImagen);
        }

        $productos->save();

        return redirect()->route('productos.index');
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
        $productos = productos :: findOrFail($id);
        return view('productos.edit')->with('productos',$productos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productos $productos)
    {
    
    // Verificar si se ha enviado una nueva imagen
    if ($request->hasFile('imagen')) {
        // Eliminar el archivo anterior si existe
        if ($productos->imagen) {
            Storage::delete('public/imagenes/' . $productos->imagen);
        }

        // Guardar la nueva imagen y obtener solo el idtipo del archivo
        $rutaImagen = $request->file('imagen')->store('public/imagenes');
        $productos->imagen = basename($rutaImagen);
    }

    // Guardar el objeto actualizado en la base de datos
    $productos->save();

    // Redireccionar a la vista de productos
    return redirect()->route('productos.index');








    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $productos = productos :: findOrFail($id);
        $productos->delete();
        return redirect()->route('productos.index');
    }
}
