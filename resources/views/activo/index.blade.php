@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-home"></i> <a href="{{url('/activo')}}">Administrar Activos</a>
			</li>
			<li class="active">
				<i class="fa fa-desktop"></i>Administrar Activos
			</li>
		</ol>
	</div>

	<div class="col-lg-12">
		<label><a href="{{url('/activo/create')}}" class="btn btn-success btn-lg" role="button"> <i class="fa fa-plus"></i> Nuevo Activo</a></label>
	</div>
	<div class="col-lg-12">

	</div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Activos</h2>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover" id="tablaperfilpuesto">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Categoria</th>
					<th>Descripcion</th>
					<th>Empresa</th>
					<th>Opciones</th>
				</thead>
               @foreach ($activos as $act)
				<tr>
					<td>{{ $act->idactivo}}</td>
					<td>{{ $act->nombreactivo}}</td>
					<td>{{ $act->tipoactivo}}</td>
					<td>{{ $act->descripactivo}}</td>
					<td>{{ $act->nombreempresa}}</td>
					<td>
						<a href="{{URL::action('ActivoController@edit',$act->idactivo)}}"><button class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$act->idactivo}}" data-toggle="modal"><button class="btn btn-xs btn-danger">
                        <i class="glyphicon glyphicon-remove"></i> Eliminar</button></a>
					</td>
				</tr>
				@include('activo.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection