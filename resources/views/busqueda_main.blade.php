@extends('empresa.template.partials.nav_partial')
@section('title','Busqueda')

@section('content')
    <div class="panel-body">
        <!-- Original tabs START -->

        <div id="mtabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" rel="tab1">Web</a></li>
                <li><a href="#tab2" rel="tab2">Mapa</a></li>

            </ul>
        </div>

        <div id="mtabs_content_container">
            <div id="tab1" class="mtab_content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                @if(count($sucursales) != 0)
                                    <div class="panel-heading">
                                        Resultados para la busqueda de "{{$texto}}"
                                    </div>
                                    <!-- .panel-heading -->
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordion">
                                            @foreach($sucursales as $sucursal)
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$sucursal->telefono}}">{{$sucursal->nombre}}</a>
                                                    </h4>
                                                </div>
                                                <div id="collapse{{$sucursal->telefono}}" class="panel-collapse collapse ">
                                                    <div class="panel-body">
                                                        Descripcion: {{$sucursal->descripcion}} <br>
                                                        Direccion: {{$sucursal->direccion}} <br>
                                                        Telefono: {{$sucursal->telefono}}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="panel-heading">
                                        No se encontraron coindencias para "{{$texto}}"
                                    </div>
                                @endif
                                <!-- .panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

            </div>
            <div id="tab2" class="mtab_content" style="display: none;">
                <p>Tab content 2</p>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            //  When user clicks on tab, this code will be executed
            $("#mtabs li").click(function() {
                //  First remove class "active" from currently active tab
                $("#mtabs li").removeClass('active');

                //  Now add class "active" to the selected/clicked tab
                $(this).addClass("active");

                //  Hide all tab content
                $(".mtab_content").hide();

                //  Here we get the href value of the selected tab
                var selected_tab = $(this).find("a").attr("href");

                //  Show the selected tab content
                $(selected_tab).fadeIn();

                //  At the end, we add return false so that the click on the link is not executed
                return false;
            });
            $("#simulate").click(function(){
                $('a[rel="tab2"]').trigger("click");
            });
        });
        $(document).ready(function(){
            $("#tab2").on('click', function(){
                document.getElementById('tab2').style.display= 'block';
            })
        })
    </script>
@endsection