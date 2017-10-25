@extends ('layouts.admin')
@section ('contenido')
<div class="row">
                <div class="col-lg-12">
                     <ol class="breadcrumb">
                          <li>
                              <i class="fa fa-home"></i> <a href="{{url('/activo')}}">Administrar Activos</a>
                          </li>
                          <li class="active">
                              <i class="fa fa-desktop"></i>
                               Control de Tipo de Tratamiento
                            </li>
                        </ol>
                    </div>
               
                <!-- /.row -->
         <div class="col-lg-12">
               <label><a href="{{url('/tipotratamiento/create')}}" 
               class="btn btn-success btn-lg" role="button">
                <i class="fa fa-plus"></i> Nuevo</a></label>
        </div>
        <div class="col-lg-12">
        
        </div>
</div>
                 
            <!-- /.row -->

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Tipos de Tratamientos</h2>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover" id="tablaperfilpuesto">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Opciones</th>
				</thead>
               @foreach ($tipotratamientos as $tipotratamiento)
				<tr>
					<td>{{ $tipotratamiento->idtipotratamiento}}</td>
					<td>{{ $tipotratamiento->nombretipotrata}}</td>
					<td>{{ $tipotratamiento->descriptipotrata}}</td>
					<td>
						<a href="{{URL::action('TipoTratamientoRiesgoController@edit',
            $tipotratamiento->idtipotratamiento)}}"><button class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$tipotratamiento->idtipotratamiento}}" data-toggle="modal"><button class="btn btn-xs btn-danger">
                        <i class="glyphicon glyphicon-remove"></i> Eliminar</button></a>
					</td>
				</tr>
				@include('tipotratamiento.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection