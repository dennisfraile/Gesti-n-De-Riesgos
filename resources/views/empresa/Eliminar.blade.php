@extends('layouts.admin')
@section('contenido')
<div class="row">
                <div class="col-lg-12">
                     <ol class="breadcrumb">
                          <li>
                              <i class="fa fa-home"></i> <a href="{{url('/activo')}}">Eliminar empresas</a>
                          </li>
                          <li class="active">
                              <i class="fa fa-desktop"></i>
                               Eliminar empresas
                            </li>
                        </ol>
                    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Empresas</h2>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover" id="tablaperfilpuesto">
				<thead>
					<th>Id</th>
					<th>Nombre de la empresa</th>
					<th>Descripccion de la empresa</th>
				</thead>
               @foreach ($empresa as $emp)
				<tr>
					<td>{{ $emp->idempresa}}</td>
					<td>{{ $emp->nombreempresa}}</td>
					<td>{{ $emp->descripempresa}}</td>
					<td>
                        <a href="{{URL::action('EmpresaController@destroy',$emp->idempresa)}}" data-target="#modal-delete-{{$emp->idempresa}}" data-toggle="modal"><button class="btn btn-xs btn-danger">
                        <i class="glyphicon glyphicon-remove"></i> Eliminar</button></a>
					</td>
				</tr>
				@include('empresa.EmpresaShow')
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection