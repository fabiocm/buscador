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
                <?php
                $currentPage = $sucursales->currentPage(); //Página actual
                $maxPages = $currentPage + 3; //Máxima numeración de páginas
                $firstPage = 1; //primera página
                $lastPage = $sucursales->lastPage(); //última página
                $nextPage = $currentPage+1; //Siguiente página
                $forwardPage = $currentPage-1; //Página anterior
                $sucursales->setPath('');
                ?>
                <ul class="pagination">
                    <!-- Botón para navegar a la primera página -->
                    <li class="@if($currentPage==$firstPage){{'disabled'}}@endif">
                        <a href="@if($currentPage>1){{$sucursales->url($firstPage)}}@else{{'#'}}@endif" class='btn'>Primera</a>
                    </li>
                    <!-- Botón para navegar a la página anterior -->
                    <li class="@if($currentPage==$firstPage){{'disabled'}}@endif">
                        <a href="@if($currentPage>1){{$sucursales->url($forwardPage)}}@else{{'#'}}@endif" class='btn'>«</a>
                    </li>
                    <!-- Mostrar la numeración de páginas, partiendo de la página actual hasta el máximo definido en $maxPages -->
                    @for($x=$currentPage;$x<$maxPages;$x++)
                        @if($x <= $lastPage)
                            <li class="@if($x==$currentPage){{'active'}}@endif">
                                <a href="{{$sucursales->url($x)}}" class='btn'>{{$x}}</a>
                            </li>
                    @endif
                @endfor
                <!-- Botón para navegar a la pagina siguiente -->
                    <li class="@if($currentPage==$lastPage){{'disabled'}}@endif">
                        <a href="@if($currentPage<$lastPage){{$sucursales->url($nextPage)}}@else{{'#'}}@endif" class='btn'>»</a>
                    </li>
                    <!-- Botón para navegar a la última página -->
                    <li class="@if($currentPage==$lastPage){{'disabled'}}@endif">
                        <a href="@if($currentPage<$lastPage){{$sucursales->url($lastPage)}}@else{{'#'}}@endif" class='btn'>Última</a>
                    </li>
                </ul>
            </div>

            <div id="tab2" class="mtab_content" style="display: none;">
                <div id="map"></div>
                <div id="infoPanel" type="hidden">
                    <b >Dirección aproximada:</b>
                    <div id="address" ></div>
                </div>
                <input id="cant_sucursales" type="hidden" name="cant_sucursales" value="{{count($sucursales)}}"/>
                @for($i = 0; $i<count($sucursales);$i++)
                    <input id="nombre{{$i}}" name="nombre" type="hidden"  value="{{$sucursales[$i]->nombre}}"/>
                    <input id="telefono{{$i}}" name="telefono" type="hidden"  value="{{$sucursales[$i]->telefono}}"/>
                    <input id="longitud{{$i}}" name="longitud" type="hidden"  value="{{$sucursales[$i]->longitud}}"/>
                    <input id="latitud{{$i}}" name="latitud" type="hidden"  value="{{$sucursales[$i]->latitud}}"/>
                @endfor

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