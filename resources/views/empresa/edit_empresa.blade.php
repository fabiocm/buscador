@extends('empresa.template.partials.nav_partial')


@section('title','Editar datos de empresa')
@section('content')
    <!-- Page Content -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Empresa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar los datos de la empresa {{$empresa->nombre}}
                </div>

                <div class="panel-body">
                    {!! Form::model($empresa,['route' => ['empresas.update',$empresa->id],'method' => 'PUT', 'class' => 'form-horizontal ',
                                                    'enctype'=>'multipart/form-data']) !!}

                    <div class="form-group" style="padding-top: 10px">
                        {!! Form::label(null,'Nombre:',['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-7">
                            {!! Form::text('nombre',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese el nombre de la empresa']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label(null,'Fecha Fin:',['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-7">
                            {!! Form::text('descripcion',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese una descripcion de la empresa']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label(null,'Palabras Claves:',['class'=>'col-md-3 control-label']) !!}
                        <div class="col-md-7">
                            {!! Form::text('palabras_clave',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese palabras claves separadas por coma']) !!}
                        </div>
                    </div>

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