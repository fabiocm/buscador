@extends('empresa.template.ver_template')


@section('title','Ver Empresas')

@section('tituloTabla','Empresas')

@section('titulotabla2','Tabla de Empresas')

<style>

    tbody tr.is-selected {
        background-color: #e0e0e0;
    }

    tbody tr:hover {
        background-color: #eeeeee;
    }

</style>

@section('nombreColumnas')

    <th style="vertical-align: middle;text-align: left">Nombre</th>
    <th style="vertical-align: middle;text-align: left">Descripcion</th>
    <th style="vertical-align: middle;text-align: left">Cant de Sucursales</th>
    <th style="vertical-align: middle;text-align: left">Acciones</th>
@endsection

@section('contenidoTabla')
    @foreach($empresas as $empresa)
        <tr style="vertical-align: middle;text-align: left">
            <td style="vertical-align: middle;text-align: left;padding-left: 20px;">{{$empresa->nombre}}</td>
            <td style="vertical-align: middle;text-align: left;padding-left: 20px">{{$empresa->descripcion}}</td>
            <td style="vertical-align: middle;text-align: left;padding-left: 20px">{{$empresa->cant_sucursales}}</td>
                <td style="text-align: center;vertical-align: middle">

                    <a href="{{route('sucursales.show',$empresa->id)}}" class="btn btn-default btn-sm"
                       data-tooltip="tooltip" title="Ver Sucursales">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{route('empresas.edit',$empresa->id)}}" class="btn btn-default btn-sm"
                       data-tooltip="tooltip" title="Editar">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-tooltip="tooltip"
                       title="Eliminar"
                       data-target="#myDestroyModal{{ $empresa->id }}">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>


                <div class="modal fade" id="myDestroyModal{{ $empresa->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Atención</h4>
                            </div>
                            <div class="modal-body" style="padding-bottom: 30px;padding-top: 30px">
                                <div class="">¿Realmente desea eliminar a {{$empresa->nombre}} de sus actividades?</div>
                            </div>
                            <div class="modal-footer">
                                <div class="row" style="padding-right: 15px">
                                    {!! Form::open(['route' => ['empresas.destroy', $empresa->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </tr>
    @endforeach
@endsection

