@extends('layouts.app')

@section('contenidoCSS')
    <link rel="stylesheet" href="css/app.css"/>
@endsection

    
    <div class="container">
        <br><br><br><br>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Producto subastado con exito
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <h1 class="text-center">
            {{$datospro->nombre_producto}}
        </h1>

        <div class="row">

            <div class="col-md-6">
                <img class="img-fluid" src="https://www.diproelsac.com/dipro/722-large_default/horno-microondas-menumaster-jet14.jpg" alt="">
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="font-weight-bold">Descripción:</h5>
                        <p>{{$datospro->descripcion}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h5 class="font-weight-bold">Categoría:</h5>
                        @if($datospro->categoria_id==1)
                            <p>Tecnología</p>
                        @elseif($datospro->categoria_id==2)
                            <p>Hogar</p>
                        @elseif($datospro->categoria_id==3)
                            <p>Electrodomésticos</p>
                        @elseif($datospro->categoria_id==4)
                            <p>Joyas</p>
                        @elseif($datospro->categoria_id==5)
                            <p>Instrumento musical</p>
                        @else
                            <p>Juguetes</p> 
                        @endif
                    </div>
                    <div class="col-md-4">
                        <h5 class="font-weight-bold">Estado:</h5>
                        <p>{{$datospro->estado}}</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="font-weight-bold">Ubicación:</h5>
                        <p>{{$datospro->ubicacion}}</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="font-weight-bold">Garantia:</h5>
                        <p>{{$datospro->garantia}}</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">Condición:</h5>
                        <p>{{$datospro->condicion}}</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">Precio Inicial:</h5>
                        <p>S/ {{$datospro->precio_inicial}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">Inicio subasta:</h5>
                        <p>{{$datospro->inicio_subasta}}</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">Fin subasta:</h5>
                        <p>{{$datospro->final_subasta}}</p>
                    </div>
                </div>
            <div>

            
        </div>
            <button class="btn btn-success btn-block"><a class="btn btn-success btn-block" href="{{ url('registroProducto') }}">Registrar otro producto</a></button>
            <button class="btn btn-success btn-block"><a class="btn btn-success btn-block" href="{{ url('/') }}">Menú principal</a></button>
        </div>

    </div>
