<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<html lang="{{ app()->getLocale() }}">
<style>
    #imaginary_container{
        margin-top:70%; /* Don't copy this */
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

    <div class="content">
        <div class="title m-b-md" style="text-align: center;margin-top: 8%">
            BUSCADOR
        </div>
    </div>
    <div class="container" style="margin-top: -25%">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div id="imaginary_container">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control"  placeholder="Buscar" >
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

