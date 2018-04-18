@extends('empresa.template.partials.nav_partial')
@section('title','Registrar nueva sucursal para la empresa')


@section('content')
    <!-- Page Content -->
    <div class="col-md-11" style="margin-left: 100px">
        <div class="row">
            <div class="col-lg-11">
                <h1 class="page-header">Registrar Sucursal</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-11">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Completar los datos de la nueva sucursal para la empresa {{$empresa->nombre}}
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'sucursales.store','method' => 'POST', 'class' => 'form-horizontal ',
                        'enctype'=>'multipart/form-data']) !!}

                        <div class="form-group" style="padding-top: 10px">
                            {!! Form::label(null,'Nombre:',['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-7">
                                {!! Form::text('nombre',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese el nombre de la sucursal']) !!}
                            </div>
                        </div>
                        <input type="hidden" name="id_empresa" id="id_empresa" value="{{$empresa->id}}">
                        <div class="form-group">
                            {!! Form::label(null,'Direccion:',['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-7">
                                {!! Form::text('direccion',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese una direccion de la sucursal']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label(null,'Telefono:',['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-7">
                                {!! Form::text('telefono',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese el telefono de la sucursal']) !!}
                            </div>
                        </div>

                        <div id="map" ></div>
                        <div id="infoPanel">
                            <b>Dirección aproximada:</b>
                            <div id="address"></div>
                        </div>
                        <input id="longitud" type="hidden" name="longitud" value=""/>
                        <input id="latitud" type="hidden" name="latitud" value=""/>

                        <div class="form-group">
                            {!! Form::label(null,null,['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::button('FINALIZAR',['type'=>'button','class'=>'btn btn-primary',
                                'data-toggle' => 'modal', 'data-target' => '#myModalConf'])!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModalConf" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" style="padding-top: 150px">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Confirmación</h4>
                </div>
                <div class="modal-body">
                    <div class="">¿Confirmar registro de datos?</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    {!! Form::submit('Confirmar', ['class' => 'btn btn-info']) !!}
                </div>
            </div>
        </div>
    </div>


    {!! Form::close() !!}

@endsection
