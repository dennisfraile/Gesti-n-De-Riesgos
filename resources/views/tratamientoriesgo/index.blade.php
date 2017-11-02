@extends ('layouts.admin')
@section ('contenido')
<div class="row">
                <div class="col-lg-12">
                     <ol class="breadcrumb">
                          <li>
                              <i class="fa fa-home"></i> <a href="{{url('/tratamientoriesgo')}}">Administrar Tratamientos</a>
                          </li>
                          <li class="active">
                              <i class="fa fa-desktop"></i>
                               Administrar Tratamientos
                            </li>
                        </ol>
                    </div>
               
                <!-- /.row -->
         <div class="col-lg-12">
               <label><a href="{{url('/tratamientoriesgo/create')}}" 
               class="btn btn-success btn-lg" role="button"> <i class="fa fa-plus"></i> Nuevo Tratamiento</a></label>
        </div>
        <div class="col-lg-12">
        
        </div>
</div>
                 
            <!-- /.row -->

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Tratamientos</h2>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover" id="tablaperfilpuesto">
				<thead>
					
					<th>Nombre</th>
					<th>Tipo</th>
					<th>Descripcion</th>
					<th>Activo</th>
					<th>Opciones</th>
				</thead>
               @foreach ($tratamientos as $tratamiento)
				<tr>
					
					<td>{{ $tratamiento->nombretratamiento}}</td>
					<td>{{ $tratamiento->tipotratamiento}}</td>
					<td>{{ $tratamiento->descriptratamiento}}</td>
					<td>{{ $tratamiento->nombreactivo}}</td>
					<td>
						<a href="{{URL::action('TratamientoRiesgo\TratamientoRiesgoController@edit',$tratamiento->idtratamiento)}}"><button class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$tratamiento->idtratamiento}}" data-toggle="modal"><button class="btn btn-xs btn-danger">
                        <i class="glyphicon glyphicon-remove"></i> Eliminar</button></a>
					</td>
				</tr>
				@include('tratamientoriesgo.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection