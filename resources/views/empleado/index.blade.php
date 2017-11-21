@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i> <a href="{{url('/empleado')}}"> Administrar Empleados</a>
            </li>
            <li class="active">
                <i class="fa fa-desktop"></i>
                Gestion de Empleados
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
                
                                
<div class="row">
    <div class="col-lg-12">
        <div class="block">

            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left"><h2>Listado de Empleados</h2></div>
            </div>
            <div class="span12">

                <div class="table-toolbar">
                    <div class="btn-group">
                    <a href="{{url('/empleado/create')}}"><button class="btn btn-success">Agregar Nuevo <i class="fa fa-plus"></i></button></a>
                    </div>

                </div><br>

                <table class="table table-bordered table-hover" id="tablaempleado">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $emp)
                        <tr>
                            <td>{{ $emp->idempleado }}</td>
                            <td>
                                <img src="{{asset('fotos/empleados/'.$emp->foto)}}" alt="{{$emp->nombre}}" height="80px" width="80px" class="img-thumbnail">
                            </td>
                            <td>{{ $emp->nombreempleado }}</td>
                            <td>{{ $emp->apellido }}</td>
                            <td>
                                <a href="{{URL::action('EmpleadoController@edit',$emp->idempleado)}}"><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar </button></a>
                                <a href="" data-target="#modal-delete-{{$emp->idempleado}}" data-toggle="modal"><button  class="btn btn-xs btn-danger"><i class="fa fa-retweet"></i> Eliminar</button></a>
                            </td>
                        </tr>
                        @include('empleado.modal')
                        @endforeach 
                    </tbody>
                </table>
            </div>

        </div>   
    </div>
</div>     
@endsection