<div class="form-group" style="padding-top: 10px">
    {!! Form::label(null,'Nombre:',['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('nombre',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese el nombre de la empresa']) !!}
    </div>
</div>

<div class="form-group" style="padding-top: 10px">
    {!! Form::label(null,'Descripción:',['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('descripcion',null,['class'=>'form-control input-md', 'placeholder' => 'Describa la empresa']) !!}
    </div>
</div>

<div class="form-group" style="padding-top: 10px">
    {!! Form::label(null,'Dirección:',['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('direccion',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese la direccion de la empresa']) !!}
    </div>
</div>

<div class="form-group" style="padding-top: 10px">
    {!! Form::label(null,'Teléfono:',['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('telefono',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese el telefono de la empresa']) !!}
    </div>
</div>

<div class="form-group" style="padding-top: 10px">
    {!! Form::label(null,'Palabras clave:',['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('palabras_clave',null,['class'=>'form-control input-md', 'placeholder' => 'Ingrese diferentes palabras claves separadas por coma']) !!}
    </div>
</div>

<div id="map"></div>
  <div id="infoPanel">
    <b>Estado del marcador:</b>
    <div id="markerStatus"><i>Sostener para mover el marcador.</i></div>
    <b>Coordenadas geográficas:</b>
    <div id="info"></div>
    <b>Dirección aproximada:</b>
    <div id="address"></div>
  </div>
