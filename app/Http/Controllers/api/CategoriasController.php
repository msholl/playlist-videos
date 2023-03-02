<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Video;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categoria::all();
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
        return response()
            ->json(Categoria::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return $categoria;
    }
    /**
     * Lista vídeos por categoria especifica
     */
    public function videoPerCategory(int $categoria)
    {
        return Video::where('categoriaId', $categoria)->get();
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
    public function update(Categoria $categoria,Request $request)
    {
        $categoria->fill($request->all());
        $categoria->save();

        return $categoria;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $categoria)
    {
        Categoria::destroy($categoria);

        return response()->noContent();
    }
}
