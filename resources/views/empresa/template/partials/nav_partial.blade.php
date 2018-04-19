<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Bootstrap Core CSS -->
<link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="{{asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

<!-- DataTables CSS -->
<link href="{{asset('vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="{{asset('vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
<!-- Custom CSS
<link href="{{asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">
-->
<!-- Morris Charts CSS -->
<link href="{{asset('vendor/morrisjs/morris.css')}}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('plugins/theme/css/essentials.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('plugins/theme/css/layout.css')}}" rel="stylesheet" type="text/css"/>

<!------ Include the above in your HEAD tag ---------->
<style>
    #flipkart-navbar {
        background-color: #2874f0;
        color: #FFFFFF;
    }

    .row1{
        padding-top: 10px;
    }

    .row2 {
        padding-bottom: 20px;
    }

    .flipkart-navbar-input {
        padding: 11px 16px;
        border-radius: 2px 0 0 2px;
        border: 0 none;
        outline: 0 none;
        font-size: 15px;
    }

    .flipkart-navbar-button {
        background-color: #ffe11b;
        border: 1px solid #ffe11b;
        border-radius: 0 2px 2px 0;
        color: #565656;
        padding: 10px 0;
        height: 43px;
        cursor: pointer;
    }

    .cart-button {
        background-color: #2469d9;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
        padding: 10px 0;
        text-align: center;
        height: 41px;
        border-radius: 2px;
        font-weight: 500;
        width: 120px;
        display: inline-block;
        color: #FFFFFF;
        text-decoration: none;
        color: inherit;
        border: none;
        outline: none;
    }

    .cart-button:hover{
        text-decoration: none;
        color: #fff;
        cursor: pointer;
    }

    .cart-svg {
        display: inline-block;
        width: 16px;
        height: 16px;
        vertical-align: middle;
        margin-right: 8px;
    }

    .item-number {
        border-radius: 3px;
        background-color: rgba(0, 0, 0, .1);
        height: 20px;
        padding: 3px 6px;
        font-weight: 500;
        display: inline-block;
        color: #fff;
        line-height: 12px;
        margin-left: 10px;
    }

    .upper-links {
        display: inline-block;
        padding: 0 11px;
        line-height: 23px;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 0;
        color: inherit;
        border: none;
        outline: none;
        font-size: 12px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        margin-bottom: 0px;
    }

    .dropdown:hover {
        background-color: #fff;
    }

    .dropdown:hover .links {
        color: #000;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown .dropdown-menu {
        position: absolute;
        top: 100%;
        display: none;
        background-color: #fff;
        color: #333;
        left: 0px;
        border: 0;
        border-radius: 0;
        box-shadow: 0 4px 8px -3px #555454;
        margin: 0;
        padding: 0px;
    }

    .links {
        color: #fff;
        text-decoration: none;
    }

    .links:hover {
        color: #fff;
        text-decoration: none;
    }

    .profile-links {
        font-size: 12px;
        font-family: 'Roboto', sans-serif;
        border-bottom: 1px solid #e9e9e9;
        box-sizing: border-box;
        display: block;
        padding: 0 11px;
        line-height: 23px;
    }

    .profile-li{
        padding-top: 2px;
    }

    .largenav {
        display: none;
    }

    .smallnav{
        display: block;
    }

    .smallsearch{
        margin-left: 15px;
        margin-top: 15px;
    }

    .menu{
        cursor: pointer;
    }

    @media screen and (min-width: 768px) {
        .largenav {
            display: block;
        }
        .smallnav{
            display: none;
        }
        .smallsearch{
            margin: 0px;
        }
    }

    /*Sidenav*/
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #fff;
        overflow-x: hidden;
        transition: 0.5s;
        box-shadow: 0 4px 8px -3px #555454;
        padding-top: 0px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        color: #fff;
    }

    @media screen and (max-height: 450px) {
        .sidenav a {font-size: 18px;}
    }

    .sidenav-heading{
        font-size: 36px;
        color: #fff;
      }

      #map {
        width: 500px;
        height: 400px;
        float: center;
        left : 300px;
      }
      #infoPanel {
        float: center;
        margin-left: 300px;
      }
      #infoPanel div {
        margin-bottom: 5px;
      }

</style>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<title>@yield('title','Empresa')</title>
<div id="flipkart-navbar">
    <div class="container">
        <div class="row" style="margin-top: 20px"></div>

        <div class="row row2">
            <div class="col-sm-2">
                <a href="/"><h1 style="margin:0px" ><span class="largenav" style="color: white">Buscador</span></h1></a>
            </div>
            <form role="search" action="{{url('/searchredirect/')}}">
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">


                    <input class="flipkart-navbar-input col-xs-11" style="color: black" type="" placeholder="Busque empresas" name="search">

                    <button type="submit" class="flipkart-navbar-button col-xs-1"></button>


                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div>
            </form>
            <div class="col-sm-2" >
                <li class="upper-links dropdown" style="font-size: 25px;margin-top: -20px"><a class="links" href="#">Opciones</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="{{route('empresas.create')}}">Registrar Empresa</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{route('empresas.index')}}">Gestion de Empresas</a></li>
                    </ul>
                </li>
            </div>

        </div>
    </div>
<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
</div>
</div>
<div id="page-wrapper">
@include('flash::message')
@include('errors.notifications.validation_notification_error')
@section('content')
@show
</div>

<!-- jQuery -->
    <script src="{{asset('jquery/jquery-3.1.1.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('vendor/metisMenu/metisMenu.min.js')}}"></script>

    <script src="{{asset('plugins/theme/datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/theme/datatables-plugins/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('plugins/theme/datatables-responsive/dataTables.responsive.js')}}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{asset('vendor/raphael/raphael.min.js')}}"></script>
<!--
<script src="{{asset('vendor/morrisjs/morris.min.js')}}"></script>
<script src="{{asset('data/morris-data.js')}}"></script>
<!-- Custom Theme JavaScript -->
    <script src="{{asset('dist/js/sb-admin-2.js')}}"></script>

    <script src="{{asset('js/tooltip.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>

        <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi6WWtE0ZkGcW9atU9m9sFvvi-XH_tID8">
        </script>

        <script type="text/javascript"src = "{{asset('js/maps.js')}}"></script>

