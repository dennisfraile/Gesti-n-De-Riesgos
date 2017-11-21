@extends('layouts.admin')
@section('contenido')
<div class="row">
                <div class="col-lg-12">
                     <ol class="breadcrumb">
                          <li class="active">
                              <i class="fa fa-desktop"></i>
                               Analizar Activos
                            </li>
                        </ol>
                    </div>
               
                <!-- /.row -->
         <div class="col-lg-12 pull-left">
               <label><a href="{{url('valorar')}}" class="btn btn-success btn-lg" role="button"> <i class="fa fa-plus"></i> Valorar Nuevo Activo</a></label>
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
					<th>Activo</th>
					<th>Valor del activo</th>
					<th>Degradacion del activo</th>
					<th>Probabilidad de ocurrencia</th>
					<th>Riesgo</th>
					<th>Acciones</th>
				</thead>
               @foreach ($anactivos as $act)
				<tr>
					<td>{{ $act->nombreactivo}}</td>
					<td>{{ $act->valoractivo}}</td>
					<td>{{ $act->descripactivo}}</td>
					<td>{{ $act->degradacion}}</td>
					<td>{{ $act->probocurrencia}}</td>
					<td>{{ $act->riesgo}}</td>
					<td>
                        <a href="{{URL::action('AnalisisController@destroy',$act->idanalisis)}}" data-target="#modal-delete-{{$act->idanalisis}}" data-toggle="modal"><button class="btn btn-xs btn-danger">
                        <i class="glyphicon glyphicon-remove"></i> Eliminar</button></a>
					</td>
				</tr>
				@include('activo.Analisismodal')
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection