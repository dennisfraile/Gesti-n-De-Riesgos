@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-12">
         <ol class="breadcrumb">
              <li>
                  <i class="fa fa-home"></i> <a href="{{url('/vulnerabilidad')}}">Gestionar Vulnerabilidades</a>
              </li>
              <li class="active">
                  <i class="fa fa-desktop"></i>
                   Administrar vulneracion 
                </li>
            </ol>
        </div>
 
     <div class="col-lg-12">
           <label><a href="{{url('/vulnerabilidad/create')}}" class="btn btn-success btn-lg" role="button"> <i class="fa fa-plus"></i> Nueva Vulnerabilidad</a></label>
    </div>
    <!-- Mensajes -->
    <div class="col-lg-12">
    
    </div>
</div>
                 

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Vulnerabilidades</h2>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover" id="tablavulner">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Amenaza</th>
					<th>Opciones</th>
				</thead>
               @foreach ($vulnerabilidades as $vul)
				<tr>
					<td>{{ $vul->idvulnerabilidad}}</td>
					<td>{{ $vul->nombrevulne}}</td>
					<td>{{ $vul->descripvulne}}</td>
					<td>{{ $vul->nombreamenaza}}</td>
					<td>
						<a href="{{URL::action('VulnerabilidadController@edit',$vul->idvulnerabilidad)}}"><button class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$vul->idvulnerabilidad}}" data-toggle="modal"><button class="btn btn-xs btn-danger">
                        <i class="glyphicon glyphicon-remove"></i> Eliminar</button></a>
					</td>
				</tr>
				@include('vulnerabilidad.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection