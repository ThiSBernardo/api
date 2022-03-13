<?php

namespace App\Http\Controllers;

use App\Models\interessado;
use Illuminate\Http\Request;

class InteressadosController extends Controller
{
    /**
     * listagem do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return interessado::all();
    }

    /**
     * Armazem do recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        
        
        ]);

        return interessado::create($request->all());
    }

    /**
     * Exibir o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    return interessado::findOrFail($id);
    }

    /**
     * Atualize o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $interessado = interessado::findOrFail($id);

        $interessado->update($request->all());

        return $interessado;
    }

    /**
     * Remova o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return interessado::destroy($id);
    }

    public function search($name)
    {
        return interessado::where('name', 'like', '%'.$name.'%')->get();
    }
}
