<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Sucursal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BuscadorController extends Controller
{
    public function busqueda($search)
    {
        $texto = urldecode($search);
        $array = DB::table('empresas')
            ->join('sucursales','empresas.id','sucursales.empresa_id')
            ->where('empresas.nombre',$texto)
            ->orWhere('sucursales.nombre', 'like', '%' . $texto . '%')
            ->select('empresas.nombre as nombre_empresa','empresas.descripcion','sucursales.nombre','direccion','telefono','longitud','latitud','empresa_id')
            ->orderBy('empresas.nombre')
            ->paginate(10);
        if ($array->isEmpty()) {
            /* $arrayPal = DB::table('palabras_claves')
                 ->join('empresas', 'palabras_claves.empresa_id', 'empresas.id')
                 ->where('palabras_claves.palabra', $texto)
                 ->select('empresa_id')
                 ->get()->toArray();

             $var = collect();
             for ($i = 0; $i < count($arrayPal); $i++) {
                 $var[$i] = $arrayPal[$i]->empresa_id;
             }
             for ($i = 0; $i < count($var); $i++) {
                 $array1 = DB::table('sucursales')
                     ->join('empresas', 'empresas.id', 'sucursales.empresa_id')
                     ->where('sucursales.empresa_id', $var[$i])
                     ->select('empresas.nombre as nombre_empresa','empresas.descripcion','sucursales.nombre','direccion','telefono','longitud','latitud','empresa_id')
                     ->get();
                 $array->push($array1);
             }

             $su = collect(new Sucursal());
             for($i=0;$i<count($array);$i++){
                 for($j=0;$j<count($array[$i]);$j++){
                     $su->push($array[$i][$j]);
                 }
             }*/
            $array = DB::table('sucursales')
                ->join('empresas', 'empresas.id', 'sucursales.empresa_id')
                ->join('palabras_claves', 'palabras_claves.empresa_id', 'empresas.id')
                ->where('palabras_claves.palabra',$texto)
                ->select('empresas.nombre','empresas.descripcion','sucursales.nombre','direccion','telefono','longitud','latitud','sucursales.empresa_id')
                ->orderBy('empresas.nombre')
                ->distinct()->paginate(10);

        }

        return view('busqueda_main')->with('sucursales',$array)->with('texto',$search);
    }
}
