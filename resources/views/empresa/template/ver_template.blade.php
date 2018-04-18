@extends('empresa.template.partials.nav_partial')
@section('content')
@section('boton')
@show
    <body>
    <div style="margin-left: 110px">

            <div class="row">
                <div class="col-lg-10">
                    <h1 class="page-header">@yield('tituloTabla','Default')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            @section('extra')
            @show
            <!-- /.row -->
            <div class="row">
                @section('tamañoTabla1')
                <div class="col-lg-10">
                    @show
                    @section('arribaDeTabla')

                    @show
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            @yield('titulotabla2','Default2')
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">

                            @section('tamañoTabla2')
                            <table width="100%"class="table table-bordered mdl-shadow--2dp "

                                   id="dataTables-example">
                                @show
                                <thead>
                                <tr style="vertical-align: middle;text-align: left">
                                    @section('nombreColumnas')
                                        <th>Columna 1</th>
                                        <th>Columna 2</th>
                                    @show
                                </tr>
                                </thead>
                                <tbody>
                                @section('contenidoTabla')

                                    <tr class="odd gradeX">
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.0</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.5</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 6</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 7</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>Trident</td>
                                        <td>AOL browser (AOL desktop)</td>
                                    </tr>
                                @show
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->


                        </div>

                        <!-- /.panel-body -->
                    </div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

            </div>


    </div>
</body>



@endsection