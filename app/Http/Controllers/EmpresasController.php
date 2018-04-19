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
            $var['sucursales'] = $var->sucursales;

        });

        for($i = 0; $i < count($empresas);$i++){
            $s = 0;
            for($j = 0; $j < count($empresas[$i]->sucursales);$j++){
                $s++;
            }
            $empresas[$i]->cant_sucursales = $s;
        }


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
        $palabras_claves = PalabraClave::where('empresa_id', $id)->get();

        for ($i = 0; $i < count($palabras_claves); $i++){
            $array[$i] = $palabras_claves[$i]->palabra;
        }
        $empresa = Empresa::find($id);
        $empresa->palabras_clave = implode(',',$array);
        return view('empresa.edit_empresa')->with('empresa',$empresa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'palabras_clave' => 'required',
        ]);
        $empresa = Empresa::find($id);
        $empresa->fill($request->all());
        $palabras_claves = explode(',', $request->palabras_clave);
        PalabraClave::where('empresa_id',$empresa->id)->delete();
        if ($empresa->save()){

                for($i = 0; $i < count($palabras_claves);$i++){
                    $palabras_clave = new PalabraClave();
                    $palabras_clave->palabra = $palabras_claves[$i];
                    $palabras_clave->empresa_id = $empresa->id;
                    $palabras_clave->save();
                }
            flash('La empresa fue guardada correctamente','info');
        }
        return Redirect::route('empresas.index');

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
