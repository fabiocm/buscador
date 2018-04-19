<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<html lang="{{ app()->getLocale() }}">
    <title>
        Inicio
    </title>
<style>
    #imaginary_container{
        margin-top:70%;
    }
    .stylish-input-group .input-group-addon{
        background: white !important;
    }
    .stylish-input-group .form-control{
        border-right:0;
        box-shadow:0 0 0;
        border-color:#ccc;
    }
    .stylish-input-group button{
        border:0;
        background:transparent;
    }
    .title {
        font-size: 84px;
    }
</style>
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container-fluid">



        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones <span></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('empresas.create')}}"><i class="lnr lnr-user"></i> <span>Registrar Empresa</span></a></li>
                        <li><a href="{{route('empresas.index')}}"><i class="lnr lnr-cog"></i> <span>Gestion de Empresas</span></a></li>

                    </ul>
                </li>
                <!-- <li>
                    <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
    <div class="content">
        <div class="title m-b-md" style="text-align: center;margin-top: 8%">
            BUSCADOR
        </div>
    </div>
    <form role="search" action="{{url('/searchredirect/')}}">
    <div class="container" style="margin-top: -25%">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div id="imaginary_container">
                    <div class="input-group stylish-input-group">


                         <input type="text" class="form-control" name="search" placeholder="Buscar" >

                         <span class="input-group-addon">
                            <button type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
