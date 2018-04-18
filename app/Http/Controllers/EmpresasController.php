<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\PalabraClave;
use App\Sucursal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        $empresas->each(function($var){
            $var['nombre'] = $var->nombre;
            $var['descripcion'] = $var->descripcion;
        });


        return view('empresa.ver_empresas',['empresas' => $empresas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.registrar_empresa');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'direccion' => 'required',
            'telefono' => 'required|numeric',
            'palabras_clave' => 'required',
        ]);
        $empresa = new Empresa($request->all());
        $sucursal = new Sucursal($request->all());
        $palabras_claves = explode(',', $request->palabras_clave);



        if ($empresa->save()){
            $sucursal->empresa_id = $empresa->id;
            if ($sucursal->save())
                for($i = 0; $i < count($palabras_claves);$i++){
                    $palabras_clave = new PalabraClave();
                    $palabras_clave->palabra = $palabras_claves[$i];
                    $palabras_clave->empresa_id = $empresa->id;
                    $palabras_clave->save();
                }
            flash('La empresa fue guardada correctamente','info');
        }
        return Redirect::route('empresas.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
