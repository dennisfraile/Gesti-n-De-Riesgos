@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
               <i class="fa fa-home"></i> <a href="{{url('/control')}}">Administrar Controles de Riesgo</a>
            </li>
            <li class="active">
               <i class="fa fa-desktop"></i>Administrar Controles de Riesgo
            </li>
        </ol>
    </div>
              
    <div class="col-lg-12">
         <label><a href="{{url('/control/create')}}" class="btn btn-success btn-lg" role="button"> <i class="fa fa-plus">
         </i> Nuevo Control</a></label>
    </div>
    <div class="col-lg-12">
   		<!-- MENSAJES -->
     </div>
</div>
                 
        
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2> Listado Controles de Riesgo</h2>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover" id="tablaperfilpuesto">
				<thead>
					<th>Id</th>
					<th>nombre Activo</th>
					<th>Descripcion Control</th>
					<th>Fecha Inicio</th>
					<th>Fecha Fin</th>
					<th>Estado</th>
					<th>Presupuesto</th>
					<th>Encargado</th>
					<th>Opciones</th>
				</thead>
	           @foreach ($controles as $con)
				<tr>
					<td>{{ $con->idcontrol}}</td>
					<td>{{ $con->nombreactivo}}</td>
					<td>{{ $con->descripcontrol}}</td>
					<td>{{ $con->fechainicio}}</td>
					<td>{{ $con->fechafin}}</td>
					<td>{{ $con->estado}}</td>
				    <td>{{ $con->presupuesto}}</td>
				    @foreach ($encargados as $en)
						@if($en->idempleado==$con->encargado)
							<td>{{$en->nombre}}</td>
							 @break
						@endif	 	
					@endforeach
					<td>
						<a href="{{URL::action('ControlRiesgoController@edit',$con->idcontrol)}}"><button class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
	                    <a href="" data-target="#modal-delete-{{$con->idcontrol}}" data-toggle="modal"><button class="btn btn-xs btn-danger">
	                    <i class="glyphicon glyphicon-remove"></i> Eliminar</button></a>
					</td>
				</tr>
				@include('control.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection