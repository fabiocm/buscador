<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Sucursal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SucursalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function nueva($id){
        $empresa = Empresa::find(Sucursal::find($id)->empresa_id);
        return view('sucursal.registrar_sucursal')->with('empresa',$empresa);
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
            'direccion' => 'required',
            'telefono' => 'required|numeric'
        ]);
        $sucursal = new Sucursal();
        $sucursal->fill($request->all());
        $sucursal->empresa_id = $request->id_empresa;
        if ($sucursal->save()){
            flash('Se han editado los datos de la sucursal correctamente','info');
        }
        return Redirect::route('sucursales.show',$sucursal->empresa_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);

        return view('sucursal.ver_sucursales')->with('sucursales',Sucursal::where('empresa_id',$id)->get())->with('empresa',$empresa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $empresa = Empresa::find(Sucursal::find($id)->empresa_id);
        return view('sucursal.edit_sucursal')->with('sucursal',Sucursal::find($id))->with('empresa',$empresa);
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
            'direccion' => 'required',
            'telefono' => 'required|numeric'
        ]);
        $sucursal = Sucursal::find($id);
        $sucursal->fill($request->all());
        if ($sucursal->save()){
            flash('Se han editado los datos de la sucursal correctamente','info');
        }
        return Redirect::route('sucursales.show',$sucursal->empresa_id);

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
