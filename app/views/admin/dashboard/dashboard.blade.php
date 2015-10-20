@extends("admin.layout")

@section("class")
dashboard
@stop


@section("content")


<div class="botones-home margin-top-lg">
        

    <div class="row margin-top-lg">
        <div class="col-xs-3 col-lg-3 text-azul text-center padding-bottom-lg">
            <a href="./admin/carrusel">
                <span class="glyphicon glyphicon-forward medium"></span>
                <h2>Carrusel</h2>
            </a>

        </div>

        <div class="col-xs-3 col-lg-3 text-azul text-center padding-bottom-lg">
            <a href="./admin/inmuebles">
                <span class="fa fa-building-o medium"></span>
                <h2>Inmuebles</h2>
            </a>

        </div>


        <div class="col-xs-3 col-lg-3 text-azul text-center padding-bottom-lg">
            <a href="./admin/contactanos">
                <span class="fa fa-pencil-square-o medium"></span>
                <h2>Formulario de Contactanos</h2>
            </a>

        </div>

        <div class="col-xs-3 col-lg-3 text-azul text-center padding-bottom-lg">
            <a href="./admin/users">
                <span class="fa fa-users medium"></span>
                <h2>Administradores</h2>
            </a>

        </div>

    </div>
        




        
</div>



@stop