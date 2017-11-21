@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li> <i class="fa fa-home"></i> <a href="{{url('/empleado')}}"> Administrar Empleados</a>
			</li>
			<li class="active">
				<i class="fa fa-desktop"></i> Crear Empleado</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
			<h3>Nuevo Empleado</h3>
	</div>		
</div><br>

			
{!!Form::open(array('url'=>'empleado','method'=>'POST','autocomplete'=>'off','files'=>true, 'id' => 'my-dropzone'))!!}
{{Form::token()}}
	<div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

        	<div class="form-group">
				<label for="foto"> Foto Empleado </label>
				<input type="file"  class="form-control" name="foto"  >
			</div>

            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" value="{{old('nombre')}}" required class="form-control" placeholder="Nombre..." id="nombre">
            </div>
            
            <div class="form-group">
            	<label for="apellido">Apellido</label>
            	<input type="text" name="apellido" value="{{old('apellido')}}" required class="form-control" placeholder="Apellido..." id="primerapellido">
            </div>

		</div>
		
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">   
			
			<div class="form-group">
			  <label for="idempresa"> Empresa</label>
			    <select name="idempresa" required  class="form-control">
			       <option value="">Seleccionar empresa...</option>
			        @foreach ($empresas as $emp)
			              <option value="{{$emp->idempresa}}">{{$emp->nombreempresa}}</option>
			        @endforeach
			    </select>     
			</div>

			<div class="form-group">
			  <label for="idrol"> Cargo</label>
			    <select name="idrol" required  class="form-control">
			       <option value="">Seleccionar Cargo...</option>
			        @foreach ($roles as $rol)
			              <option value="{{$rol->idrol}}">{{$rol->nombrerol}}</option>
			        @endforeach
			    </select>     
			</div>

			<br>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			   <div class="form-group">
			        <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
			        <a href="{{url('empleado')}}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>
			   </div>
			</div>
			
		</div>            
	</div>
{!!Form::close()!!}		
@endsection
