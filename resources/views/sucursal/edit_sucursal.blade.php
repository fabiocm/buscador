@extends('empresa.template.partials.nav_partial')


@section('title','Editar datos de la sucursal ')
@section('content')
    <!-- Page Content -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Sucursal</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar los datos de la sucursal {{$sucursal->nombre}} de la empresa {{$empresa->nombre}}
                </div>

                <div class="panel-body">
                    {!! Form::model($sucursal,['route' => ['sucursales.update',$sucursal->id],'method' => 'PUT', 'class' => 'form-horizontal ',
                                                    'enctype'=>'multipart/form-data']) !!}

                    <div class="form-group" style="padding-top: 10px">
                        {!! Form::label(null,'Nombre:',['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-7">
                            {!! Form::text('nombre',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese el nombre de la sucursal']) !!}
                        </div>
                    </div>

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

                    <div id="map" style="left:450px"></div>
                    <div id="infoPanel">
                        <b>Dirección aproximada:</b>
                        <div id="address"></div>
                    </div>
                    <input id="longitud" type="hidden" name="longitud" value="{{$sucursal->longitud}}"/>
                    <input id="latitud" type="hidden" name="latitud" value="{{$sucursal->latitud}}"/>

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
    <!-- /.row -->
    <!-- /.container-fluid -->



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
                    <div class="">¿Confirmar edición de datos?</div>
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

